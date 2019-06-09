import './style.css';

const $menuButton = document.querySelector('.toggle_menu');

$menuButton.addEventListener('click', toggle);

function toggle() {
  const $menu = document.querySelector('.admin_header');
  const $top = document.querySelector('.admin__top_header');
  const $main = document.querySelector('.dashboard_main');

  if ($menu.style.display === 'none' || $menu.style.display === '') {
    $menu.style.display = 'block';
    $top.style.marginLeft = '30rem';
    $main.style.marginLeft = '30rem';
  } else {
    $menu.style.display = 'none';
    $top.style.marginLeft = '0';
    $main.style.marginLeft = '0';
  }
}
