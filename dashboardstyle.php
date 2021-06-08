<style>
main{
   overflow:hidden;
}
aside{
   overflow-y: scroll;
   overflow-x:hidden;
   width: 200px;
   padding: 10px 0;
}
aside nav{
   border-bottom: .12px solid rgba(66, 63, 63, 0.322);
}
aside nav:hover{
   background: rgba(56, 55, 55, 0.473);
}
section{
   overflow-y: scroll;
   overflow-x:hidden;
}
aside::-webkit-scrollbar, section::-webkit-scrollbar{
   display: none;
}
.star{
   padding: 5px;
   color:rgb(226, 113, 38);
}
/* Style the buttons that are used to open and close the accordion panel */
.drop-down-menu {
  cursor: pointer;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  position: relative;
}
.drop-down-menu:hover{
   background: rgba(73, 72, 72, 0.479) !important;
}
.active-drop-down ~ .panel{
   display: block;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0;
  display: none;
  overflow: hidden;
  background-color: rgba(65, 63, 63, 0.288) !important;
}
input:not([type="file"]){
   height: fit-content !important;
   padding: 5px 20px !important;
}
#homePageSectionData{
display: none;
}
</style>
