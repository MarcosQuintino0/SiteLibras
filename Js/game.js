const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {}
let acceptingAnswers = true
let score = 0
let questionCounter = 0
let availableQuestions = []

let questions = [
    {
        question: 'O que é a Libras?​',
        choice1: 'Língua brasileira de sinais',
        choice2: 'Linguagem brasileira de sinais',
        choice3: 'Língua de gestos de surdos',
        choice4: 'Linguagem de mimica de surdos',
        answer: 2,
    },
    {
        question:
            'Quando a Língua Brasileira de Sinais foi finalmente reconhecida como uma língua no Brasil?',
        choice1: "2002",
        choice2: "1994",
        choice3: "1993",
        choice4: "2001",
        answer: 1,
    },
    {
        question: "Libras é universal?​",
        choice1: "Sim. A libras é universal",
        choice2: "Sim. A libras é universal, apenas no alfabeto",
        choice3: "Não. A libras não é universal",
        choice4: "Não. A libras não é multinacional",
        answer: 3,
    },
    {
        question: 'Quem foi o primeiro professor da idade moderna dos surdos?',
        choice1: "Pedro Ponce",
        choice2: "John Bulwer",
        choice3: "D. Pedro II",
        choice4: "Ferdinando Alencar",
        answer: 1,
    }
]

const SCORE_POINTS = 100
const MAX_QUESTIONS = 4

startGame = () => {
    questionCounter = 0
    score = 0
    availableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score)

        return window.location.assign('end.php')
    }

    questionCounter++
    progressText.innerText = `Questão ${questionCounter} de ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`
    
    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.innerText = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1)

    acceptingAnswers = true
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptingAnswers) return

        acceptingAnswers = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if(classToApply === 'correct') {
            incrementScore(SCORE_POINTS)
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()

        }, 1000)
    })
})

incrementScore = num => {
    score +=num
    scoreText.innerText = score
}

startGame()