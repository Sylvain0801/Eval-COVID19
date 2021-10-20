window.onload = () => {
  // Gestion responsive menu
  const toggleMenu = document.getElementById('toggle-responsive-menu')
  const navigation = document.querySelector('.navigation-menu')
  toggleMenu.addEventListener('click', function() {
    navigation.classList.toggle('show')
  })
  // Gestion affichage réponses aux questions
  const questions = document.querySelectorAll('.question-group')
  for (const question of questions) {
    question.addEventListener('click', function() {
      this.classList.toggle('show')
    })
  }
}