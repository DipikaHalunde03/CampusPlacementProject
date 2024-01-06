// Start JavaScript code here
const container = document.querySelector('.container');
const questionBox = document.querySelector('.question');
const choicesBox = document.querySelector('.choices');
const nextBtn = document.querySelector('.nextBtn');
const scoreCard = document.querySelector('.scoreCard');
const alert = document.querySelector('.alert');
const startBtn = document.querySelector('.startBtn');
const timer = document.querySelector('.timer');

// Make an array of objects that stores question, choices of question, and answer
const quiz = [
    {
        question: "Int a,b,c<br>Set b=10;<br>For(each a from 1 to 4)<br>b=b+a;<br>End for<br>c=b/5;<br>print c;",
        choices: ["5", "4", "10", "none"],
        answer: "4"
    },
    {
        question: "If m=9, n=6<br>m=m+1;;<br>n=n-1<br>m=m+n<br>If(m>n);<br> &nbsp; &nbsp;print; c<br> Else<br>&nbsp; &nbsp;print n;",
        choices: ["15", "14", "10", "none"],
        answer: "15"
    },
    {
        question: "do<br>integer i;<br>i=3<br>print i+3;<br>i=i-1<br>whle(i not equals 0);<br>end while",
        choices: ["656", "654", "555", "666"],
        answer: "656"
    },

    {
        question: "set p=7 q=3 r=5 <br>q=(2+1)+r<br>r=(r & q)^q<br>if((5 & p)< (q^5) || 2 > q);<br>r=p+q<br>print p+q+r",
        choices: ["15", "10", "30", "All of the above"],
        answer: "30"
    },
    {
        question: "How do you insert COMMENTS in C code?",
        choices: ["--This is a comment", "// This is comment", "#This is a comment", "All of the above"],
        answer: "// This is comment"
    },
    {
        question: "How can you create a variable with the floating number 2.8?",
        choices: ["float num = 2.8;", "num = 2.8 double;", "num = 2.8 float;", "val num = 2.8;"],
        answer: "float num = 2.8;"
    }
    ,
    {
        question: "What will be the output of following pseudocode?<br>char[] = TESTSTRING<br>Integer a,c;<br>char ='T'<br>c=0<br>for(each a from 0 to length of text)<br>if(text[a]==ch)<br>c=c+1<br>end if<br>end for<br>if(c>0)<br>print c else <br> print o",
        choices: ["10", "3", "1", "6"],
        answer: "3"
    },
    {
        question: "int main() { <br>  int i = 0;<br> while (i < 5){<br>std::cout << i << ;<br> i++;  }",
        choices: ["The loop executes 5 times, printing 0 1 2 3 4 ", "The loop executes 6 times, printing 0 1 2 3 4 5 "," The loop executes 4 times, printing 0 1 2 3 ", "It will not compile"],
        answer: "The loop executes 5 times, printing 0 1 2 3 4 "
    },

    {
        question: "int main() {<br>int x = 5;<br>int y = 3;<br>int z = x % y;<br> std::cout << Result:  << z << std::endl;}",
        choices: ["The result of x multiplied by y", " The remainder when x is divided by y.","The value of x raised to the power of y.", " It will not compile."],
        answer:  " The remainder when x is divided by y."
    },
    {
        question: "int main() {<br>int x = 3; <br> int y = 5;<b x += y;<br>printf(x: %d\n, x);<br>}",
        choices: ["3", "5","8", "It will not compile."],
        answer: "8"
    }

];

// Making Variables
let currentQuestionIndex = 0;
let score = 0;
let quizOver = false;
let timeLeft = 15;
let timerID = null;

// Arrow Function to Show Questions
const showQuestions = () => {
    const questionDetails = quiz[currentQuestionIndex];
    questionBox.innerHTML = questionDetails.question;

    choicesBox.textContent = "";
    for (let i = 0; i < questionDetails.choices.length; i++) {
        const currentChoice = questionDetails.choices[i];
        const choiceDiv = document.createElement('div');
        choiceDiv.textContent = currentChoice;
        choiceDiv.classList.add('choice');
        choicesBox.appendChild(choiceDiv);

        choiceDiv.addEventListener('click', () => {
            if (choiceDiv.classList.contains('selected')) {
                choiceDiv.classList.remove('selected');
            } else {
                choiceDiv.classList.add('selected');
            }
        });
    }

    if (currentQuestionIndex < quiz.length) {
        startTimer();
    }
};

// Function to check answers
const checkAnswer = () => {
    const selectedChoice = document.querySelector('.choice.selected');
    if (selectedChoice.textContent === quiz[currentQuestionIndex].answer) {
        displayAlert("Correct Answer!");
        score++;
    } else {
        displayAlert(`Wrong Answer! ${quiz[currentQuestionIndex].answer} is the Correct Answer`);
    }
    timeLeft = 15;
    currentQuestionIndex++;
    if (currentQuestionIndex < quiz.length) {
        showQuestions();
    } else {
        stopTimer();
        showScore();
    }
};

// Function to show score
const showScore = () => {
    questionBox.textContent = "";
    choicesBox.textContent = "";
    scoreCard.textContent = `You Scored ${score} out of ${quiz.length}!`;
    displayAlert("You have completed this quiz!");
    nextBtn.textContent = "Play Again";
    quizOver = true;
    timer.style.display = "none";
    nextBtn.textContent = "Back To Resources";
};

// Function to Show Alert
const displayAlert = (msg) => {
    alert.style.display = "block";
    alert.textContent = msg;
    setTimeout(() => {
        alert.style.display = "none";
    }, 2000);
};

// Function to Start Timer
const startTimer = () => {
    clearInterval(timerID); // Check for any existing timers
    timer.textContent = timeLeft;

    const countDown = () => {
        timeLeft--;
        timer.textContent = timeLeft;
        if (timeLeft === 0) {
            const confirmUser = confirm("Time Up!!! Do you want to play the quiz again");
            if (confirmUser) {
                timeLeft = 15;
                startQuiz();
            } else {
                startBtn.style.display = "block";
                container.style.display = "none";
                return;
            }
        }
    };
    timerID = setInterval(countDown, 1000);
};

// Function to Stop Timer
const stopTimer = () => {
    clearInterval(timerID);
};

// Function to shuffle questions
const shuffleQuestions = () => {
    for (let i = quiz.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [quiz[i], quiz[j]] = [quiz[j], quiz[i]];
    }
    currentQuestionIndex = 0;
    showQuestions();
};

// Function to Start Quiz
const startQuiz = () => {
    timeLeft = 15;
    timer.style.display = "flex";
    shuffleQuestions();
};

// Adding Event Listener to Start Button
startBtn.addEventListener('click', () => {
    startBtn.style.display = "none";
    container.style.display = "block";
    startQuiz();
});

nextBtn.addEventListener('click', () => {
    const selectedChoice = document.querySelector('.choice.selected');
    if (!selectedChoice && nextBtn.textContent === "Next") {
        displayAlert("Select your answer");
        return;
    }
    if (quizOver) {
        nextBtn.textContent = "Next";
        scoreCard.textContent = "";
        currentQuestionIndex = 0;
        quizOver = false;
        score = 0;
        startQuiz();
    } else {
        checkAnswer();
    }
});
