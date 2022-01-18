//select menu btn
const menuBtn = document.getElementById("btn-menu")
//Set txt btn onload
document.onload = () => menuBtn.innerText = "MENU";
//initial menu value is hidden => not dropped
let isDropped = false

//listen to btn click
menuBtn.addEventListener("click", () =>{
    const navDrop = document.querySelector("nav.navDrop")
    // change visibility and text
    const dropMenu = () => {
        navDrop.style.visibility = 'visible';
        navDrop.style.opacity = "1";
        navDrop.style.transform = "translate(0)";
        menuBtn.innerText = "FERMER";
    }
    // change visibility and text
    const hideMenu = () => {
        navDrop.style.visibility = 'hidden';
        navDrop.style.opacity = "0";
        navDrop.style.transform = "translateY(-100vh)"
        menuBtn.innerText = "MENU";
    }

    if (!isDropped){
        dropMenu()
        //change menu status
        isDropped = !isDropped;
    }
    else {
        hideMenu()
        //change menu status
        isDropped = !isDropped;
    }
})


// Select Message action status from contact form
const msgForm = document.getElementById("msgForm")
if (msgForm.innerText === ""){
    msgForm.style.display = 'none';
    msgForm.style.animation = 'none';

}


const mainTitle = document.querySelector('.home-container h1')
const subTitle = document.querySelector(".home-container h2")

window.onload = () => {
    try {
    mainTitle.style.visibility = subTitle.style.visibility = "hidden";
    mainTitle.classList.add('textIn')
    setTimeout(() => subTitle.classList.add('textIn'), 500)
    setTimeout(() =>{mainTitle.style.visibility = subTitle.style.visibility = "visible"}, 1000)
    }
    catch {
        throw "Not on main page"
    }
}



//CHAT BOT

const dataSet = {
    "init"      : {
        "answers"    : ["Comment puis-je vous aider?", "Que puis-je faire pour vous?", "Je serai ravis de répondre à vos questions"],
        "questions"  : [" "]
    },
    "greetings" : {
        "questions" : ["Hi", "Hello", "Salut", "Slt", "Bonjour", "Bonsoir", "Wesh", "Yo", "hello you", "hey", "yo"],
        "answers"   : ["Bienvenue", "Enchanté", "Bonjour", "Bonjour et bienvenue"]
    },
    "bye"       : {
        "questions" : ["Bye", "Ciao", "Au Revoir", "A bientot", " A+"],
        "answers"   : ["Au plaisir", "Au Revoir", "A bientot"]
    },
    "thanks"    : {
        "questions" : ["Thanks", "Thank You", "Merci", "Cimer"],
        "answers"   : ["Tout le plaisir est pour moi", "De rien", "Je vous en prie"]
    },
    "news"      : {
        "questions" :   ["ca va ?", "Comment ça va?"],
        "answers"   :   ["Tres bien et vous?", "Je suis en pleine forme"]
    },
    "about-bot"      : {
        "questions" :   ["Qui es-tu?", "Que sais-tu faire?", "Comment t'appelles-tu"],
        "answers"   :   ["Je suis un super Bot", "Pour l'instant des choses basiques, mais j'apprends vite!", "Je suis maxiBot, l'assistant personnel de Maxime Tamburrini"]
    },
}

// Compute the edit distance between the two given strings
const levenshteinDistance = (str1 = '', str2 = '') => {
    const track = Array(str2.length + 1).fill(null).map(() =>
        Array(str1.length + 1).fill(null));
    for (let i = 0; i <= str1.length; i += 1) {
        track[0][i] = i;
    }
    for (let j = 0; j <= str2.length; j += 1) {
        track[j][0] = j;
    }
    for (let j = 1; j <= str2.length; j += 1) {
        for (let i = 1; i <= str1.length; i += 1) {
            const indicator = str1[i - 1] === str2[j - 1] ? 0 : 1;
            track[j][i] = Math.min(
                track[j][i - 1] + 1, // deletion
                track[j - 1][i] + 1, // insertion
                track[j - 1][i - 1] + indicator, // substitution
            );
        }
    }
    return track[str2.length][str1.length];
}

    const usrBtn = document.getElementById("chat-btn")
    const usrMsg = document.getElementById("chat-input")
    const outputWindow = document.getElementById("chat-window")
    const answers = document.getElementsByClassName("answer")

usrBtn.addEventListener('click', ()=> {
    const inputMsg = usrMsg.value

    const scrollToBottom = () => {
        const chatWindowheight = outputWindow.scrollHeight
        outputWindow.scrollTo({
            top: chatWindowheight,
            left: 0,
            behavior: "smooth"
        })
    };

    const displayMessage = (className, message) => {
        const wrapMsg = document.createElement('article')
        const label = document.createElement('aside')
        const comment = document.createElement('p')
        const msg = document.createElement("p")

        wrapMsg.className = className
        msg.innerText = message

        const time = () => {
            const date = new Date();
            const hours = date.getHours()
            const minutes = date.getMinutes()
            return hours + " : " + minutes
        }

        if (className === "answer") {
            const logoBot = document.createElement('i')
            logoBot.className = "fas fa-robot"
            comment.innerText = "Aujourd'hui à " + time()
            label.appendChild(logoBot)
        } else
            comment.innerText = "vous, aujourd'hui à " + time()

        label.appendChild(comment)
        wrapMsg.appendChild(label)
        wrapMsg.appendChild(msg)
        outputWindow.appendChild(wrapMsg);
        scrollToBottom()
    };

    const randomValue = max => Math.floor(Math.random() * max);
    const getRandomIndex = key => randomValue(dataSet[key]["answers"].length);

    const getAnswer = () => {
        let randomAnswer

        for (let key in dataSet) {
            let questions = dataSet[key]["questions"]
            for (let question of questions) {
                if (levenshteinDistance(inputMsg.toLowerCase(), question.toLowerCase()) < 3) {
                    randomAnswer = dataSet[key]["answers"][getRandomIndex(key)];
                    break
                }
                // if (inputMsg.toLowerCase() === question.toLowerCase()) {
                //     randomAnswer = dataSet[key]["answers"][getRandomIndex(key)];
                //     break
                // }
            }
        }
        return randomAnswer || "Désolé je n'ai pas compris"
    };

    console.log("Input Message : " + inputMsg)
    console.log("Output Message : " + getAnswer())

    displayMessage("question", inputMsg)
    setTimeout(() => {
        setTimeout(() => {
                displayMessage("answer", getAnswer())
            },
            randomValue(2500),
            1200)
    })

    usrMsg.value = ""
    })





//Default minimize window <i class="fas fa-minus-square"></i>
// If inimized, open chat <i class="fas fa-caret-square-down"></i>
// Usefull chat icon


