const currentPage = location.href;
const navItem = document.querySelectorAll('a');
const navLen = navItem.length;

for(let i = 0; i < navLen; i++){
  if(navItem[i].href === currentPage) {
    navItem[i].className = "active";
  };
};
