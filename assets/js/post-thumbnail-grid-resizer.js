document.addEventListener("DOMContentLoaded", () => {
   if (document.getElementById("post-thumbnail-grid")) {
      
      // SETUP STATE AND CONTAINEREL
      const state = initializeState();
      const containerEl = document.getElementById("post-thumbnail-grid");
      const thumbContainerList = document.querySelectorAll("div#post-thumbnail-grid div.link-container div.thumbnail-container");
      // console.log(thumbContainerList)
      // make sure dependent variables exist
      if ( state["colGapWidth"] && state["targetColNum"] ) {
         
         // EXTRACT VARIABLES
         const { colGapWidth, targetColNum } = state;

         // IF SCREEN IS LESS THAN 1024px WIDE, 
         //    column size should be smaller than it would be at 1024px
         //    at this point, we should reduce target number of columns by 1
         //    and column size should bump back up above threshold
         
         const minDesktopContainerSize = 1024 - state["totalDesktopPadding"];
         const totalColGapWidth = (targetColNum - 1) * colGapWidth;
         const targetColSize = (minDesktopContainerSize - totalColGapWidth) / targetColNum;
         const colSizeThresholdMin = targetColSize * 0.85;
         // console.log(targetColSize)
         // console.log(colSizeThresholdMin)

         // INTERNAL FUNCTIONS

         const getNeededColSize = () => {
            const containerWidth = getContainerWidth();
            // check what column size would be if we hit the target column number
            const activeColSize = (containerWidth - totalColGapWidth) / targetColNum;
            let testColNum = targetColNum;
            let testSubWidth = activeColSize;

            // if container is less than desktop goal for container size, enable reduction of number of columns
            if ( containerWidth < minDesktopContainerSize ) {
               // while the column size is smaller than it would be in desktop view, and num of columns can still be reduced:
               while ( testColNum > 1 && testSubWidth < colSizeThresholdMin ) {
                  testColNum--;
                  testSubWidth = (containerWidth - totalColGapWidth) / testColNum;
               }
            }
            return {
               width: testSubWidth,
               colNum: testColNum
            };
         };

         const getColTemplateString = ({ width, colNum }) => {
            let calculatedColTemplate = "";
            for (let i = 0; i < colNum; i++) {
               calculatedColTemplate += width.toString().concat("px ");
            }
            return calculatedColTemplate.slice(0,-1);
         }

         const resizeContainers = () => {
            const neededColSize = getNeededColSize();
            const { width } = neededColSize;

            containerEl.style.gridTemplateColumns = getColTemplateString(neededColSize);

            for (const thumbContainer of thumbContainerList) {
               const titleContainer = thumbContainer.querySelector("div.title-overlay");

               thumbContainer.style.height = width.toString().concat("px");
               thumbContainer.style.width = width.toString().concat("px");
               titleContainer.style.height = width.toString().concat("px");
               titleContainer.style.width = width.toString().concat("px");
            }
         }

         
         // SET COLUMNGAP AND GRIDTEMPLATECOLUMNS
         containerEl.style.columnGap = colGapWidth.toString().concat("px");
         resizeContainers();


         const onResizeUpdateWidths = () => {
            // DO NOT SET WIDTH OF CONTAINER ITSELF - NEEDS TO REMAIN FLUID TO CALCULATE OTHER WIDTHS
            // RECALCULATE NEW WIDTHS OF COLUMNS
            // const containerWidth = getContainerWidth();
            Object.assign(state, { containerWidth: getContainerWidth() });
            resizeContainers();
         };
   
         window.removeEventListener("resize", onResizeUpdateWidths);
         window.addEventListener("resize", onResizeUpdateWidths);

      } else {
         console.log("gapWidth and colNum are not present in post-thumbnail-grid-resizer.js state");
      }
   }
});

// let mediaSize = 
//    window.innerWidth && document.documentElement.clientWidth ? 
//       Math.min(window.innerWidth, document.documentElement.clientWidth)
//    : 
//       window.innerWidth || document.documentElement.clientWidth || 
//       document.getElementsByTagName('body')[0].clientWidth;

const initializeState = () => {
   return {
      ...Object.assign({}, ...Object.entries(userParams).map(
         ( [key,val] ) => {
            const parsedInt = parseInt(val);
            const finalVal = isNaN(parsedInt) ? val : parsedInt;
            return { [key]: finalVal };
         }
      )),
      containerWidth: getContainerWidth()
   }
};

const getContainerWidth = () => {
   const containerEl = document.getElementById("post-thumbnail-grid");
   return containerEl.offsetWidth;
};
