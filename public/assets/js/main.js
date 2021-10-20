window.onload = () => {
  toggleMenu = document.getElementById('toggle-responsive-menu')
  navigation = document.querySelector('.navigation-menu')
  toggleMenu.addEventListener('click', function() {
    navigation.classList.toggle('show')
  })
}