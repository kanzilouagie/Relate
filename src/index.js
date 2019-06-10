import './style.css';

const $menuButton = document.querySelector('.toggle_menu');

$menuButton.addEventListener('click', toggle);

function toggle() {
  const $menu = document.querySelector('.admin_header');
  const $top = document.querySelector('.admin__top_header');
  const $main = document.querySelector('.dashboard_main');

  if ($menu.style.display === 'none' || $menu.style.display === '') {
    $menu.style.display = 'block';
    // $top.style.marginLeft = '30rem';
    // $main.style.marginLeft = '30rem';
    // $top.style.width = 'calc(100% - 30rem)';
    // $main.style.width = 'calc(100% - 30rem)';
  } else {
    $menu.style.display = 'none';
    // $top.style.marginLeft = '0';
    // $main.style.marginLeft = '0';
    // $top.style.width = '100%';
    // $main.style.width = '100%';
  }
}

document.getElementsByTagName('body')[0].onresize = function() {
  myFunction();
};
function myFunction() {
  const $menu = document.querySelector('.admin_header');
  const w = window.innerWidth;

  if (w >= 1030) {
    $menu.style.display = 'block';
  } else {
    $menu.style.display = 'none';
  }
}
