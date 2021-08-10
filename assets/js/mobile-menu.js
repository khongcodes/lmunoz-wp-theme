// MAIN
const mobileNavState = {
   isClosed: true
};

document.addEventListener("DOMContentLoaded", () => {
   console.log("mobile-menu script runs!")
   const mobileNavInterface = document.getElementById("mobile-nav-interface");
   const [mobileNavFrame, openContainer] = mobileNavInterface.children;
   registerButtonEvents(openContainer, mobileNavFrame);
})
 
const registerButtonEvents = (openContainer, mobileNavFrame) => {
   const openButton = openContainer.querySelector("button");

   openButton.addEventListener("click", event => {

      if ( mobileNavState.isClosed ) {
         mobileNavFrame.classList.remove("closed");
         openButton.classList.add("close");
      } else {
         mobileNavFrame.classList.add("closed");
         openButton.classList.remove("close");
      }

      mobileNavState.isClosed = !mobileNavState.isClosed;

   });

}