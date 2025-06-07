// Enhanced Chatbot for RK International School
// Version 2.0 - Improved with better NLP, UX, and features

// Enhanced knowledge base with categories and better responses
const QuestionMap = {
    // Greetings
    "hello": "Hello! Welcome to RK International School. How can I assist you today? 😊",
    "hellow": "Hello! Welcome to RK International School. How can I assist you today? 😊",
    "hi": "Hi there! I'm here to help with any questions about RK International School. What would you like to know?",
    "hey": "Hey! Welcome to RKIS Virtual Assistant. How can I help you today?",
    "good morning": "Good morning! How can I assist you with your school inquiries today?",
    "good afternoon": "Good afternoon! What information can I provide about RK International School?",
    "good evening": "Good evening! How may I help you with your school-related questions?",
    
    // How are you responses
    "how are you": "Thank you for asking! I'm functioning well and ready to help you with any questions about RK International School. How are you doing? 😊",
    "how are you?": "Thank you for asking! I'm functioning well and ready to help you with any questions about RK International School. How are you doing? 😊",
    "how r you": "I'm doing great, thank you! Ready to assist you with any school-related inquiries. How can I help?",
    "how r you?": "I'm doing great, thank you! Ready to assist you with any school-related inquiries. How can I help?",
    "fine": "That's wonderful to hear! Now, how can I assist you with information about RK International School?",
    "i am fine": "Great to hear that! What would you like to know about our school today?",
    "good": "Excellent! I'm here to help with any questions about RK International School. What can I tell you?",

    // About the bot
    "what is your name": "I'm the RK International School Virtual Assistant! I'm here to help you with information about our school. What would you like to know?",
    "what is your name?": "I'm the RK International School Virtual Assistant! I'm here to help you with information about our school. What would you like to know?",
    "who are you": "I'm your friendly virtual assistant for RK International School. I can help you with admissions, fees, facilities, and general school information!",
    "who are you?": "I'm your friendly virtual assistant for RK International School. I can help you with admissions, fees, facilities, and general school information!",
    "are you a robot?": "Yes, I'm an AI assistant designed to help with RK International School inquiries. I'm here 24/7 to assist you! How can I help?",
    "r you a robot?": "Yes, I'm an AI assistant for RK International School. I'm programmed to provide helpful information about our school. What would you like to know?",
    "are you a robot": "Yes, I'm an AI assistant designed to help with RK International School inquiries. I'm here 24/7 to assist you! How can I help?",
    "r you a robot": "Yes, I'm an AI assistant for RK International School. I'm programmed to provide helpful information about our school. What would you like to know?",
    "r u a robot?": "Yes, I'm an AI assistant here to help with RK International School information. What questions do you have?",
    "r u a robot": "Yes, I'm an AI assistant here to help with RK International School information. What questions do you have?",

    // Fee Related - Enhanced responses
    "fee": "For detailed fee structure and payment information, please visit our campus or contact us at 8587820850. You can also visit our Admission Enquiry section for more details. 📞",
    "fee structure": "Our fee structure varies by class and facilities. For the most current fee information, please contact us at 8587820850 or visit our campus. Would you like me to connect you to our admission team?",
    "fees": "For comprehensive fee information including tuition, transport, and other charges, please contact our admission office at 8587820850. We'll be happy to provide detailed fee structure. 💰",
    "fees kya hai": "फीस की जानकारी के लिए कृपया हमारे कैंपस में आएं या 8587820850 पर संपर्क करें। धन्यवाद।",
    "fee kya hai": "फीस की जानकारी के लिए कृपया हमारे कैंपस में आएं या 8587820850 पर संपर्क करें। धन्यवाद।",
    "fees kya hai?": "फीस की जानकारी के लिए कृपया हमारे कैंपस में आएं या 8587820850 पर संपर्क करें। धन्यवाद।",
    "fee kya hai?": "फीस की जानकारी के लिए कृपया हमारे कैंपस में आएं या 8587820850 पर संपर्क करें। धन्यवाद।",
    "tuition fee": "For tuition fee details, please contact our admission office at 8587820850. We offer competitive fees with excellent educational facilities.",
    "admission fee": "Admission fee information is available at our admission office. Please call 8587820850 for detailed fee structure and payment options.",

    // School Information
    "about school": "RK International School is a premier educational institution committed to providing quality education. We focus on holistic development of students with modern facilities and experienced faculty.",
    "school timing": "Our school timings vary by class. Please contact us at 8587820850 for specific timing information for your child's grade.",
    "school hours": "School hours depend on the class level. For detailed timing information, please call 8587820850 or visit our contact page.",
    "facilities": "We offer modern classrooms, science labs, computer lab, library, sports facilities, and much more. Would you like specific information about any facility?",
    "classes": "We offer classes from Pre-Primary to Class XII with CBSE curriculum. For specific class information, please contact our admission office.",

    // Contact and Location
    "contact": "You can reach us at 8587820850 or visit our Contact Us page for more information. Our staff is available to help you!",
    "phone": "Our contact number is 8587820850. Feel free to call us for any inquiries about admissions, fees, or school information.",
    "address": "Please visit our Contact Us page for our complete address and location details, or call 8587820850 for directions.",
    "location": "You can find our location details on the Contact Us page. We're easily accessible and our staff can provide directions if needed.",

    // Gratitude
    "thank you": "You're most welcome! I'm glad I could help. Do you have any other questions about RK International School?",
    "thanks": "You're welcome! Feel free to ask if you need any more information about our school. 😊",
    "thank u": "Happy to help! Is there anything else you'd like to know about RK International School?",

    // Common queries
    "help": "I'm here to help! I can provide information about admissions, fees, facilities, contact details, and general school information. What would you like to know?",
    "what can you do": "I can help you with information about RK International School including admissions, fee structure, school facilities, contact details, and answer general questions about our school.",
    "ok": "Great! How else can I assist you with information about RK International School?",
    "okay": "Perfect! What other information about our school would you like to know?"
};

// Enhanced redirect questions with better responses
const redirectQuestions = {
    "what is the admission process?": "redirect to admission enquiry",
    "admission": "redirect to admission enquiry",
    "admission process": "redirect to admission enquiry",
    "how to apply": "redirect to admission enquiry",
    "apply": "redirect to admission enquiry",
    "enroll": "redirect to admission enquiry",
    "enrollment": "redirect to admission enquiry"
};

// Keywords for fuzzy matching
const keywords = {
    admission: ["admission", "apply", "enroll", "join", "admit"],
    fee: ["fee", "fees", "cost", "tuition", "payment", "charge"],
    contact: ["contact", "phone", "call", "reach", "number"],
    location: ["location", "address", "where", "direction"],
    facilities: ["facility", "facilities", "lab", "library", "sports"],
    timing: ["timing", "time", "hours", "schedule"]
};

// Audio elements
const sent = new Audio('sent.wav');
const received = new Audio('received.mp3');
sent.load();
received.load();

// DOM elements
const chatbot = document.querySelector(".chatbox");
const textbox = document.querySelector(".texts");
const usr_msg = document.querySelector(".chatbox input");

// Enhanced chatbot state
let isTyping = false;
let messageHistory = [];

// Initialize chatbot
function initializeChatbot() {
    console.log("RK International School Chatbot initialized");
}

function openChatBot() {
    chatbot.style.display = "block";
    document.querySelector(".chatbot-handler img").style.display = "none";
    document.querySelector(".chatbot-handler i").style.display = "block";
    
    // Add opening animation
    chatbot.style.animation = "slideInUp 0.3s ease-out";
    
    if (textbox.innerHTML.trim() === "") {
        greet();
    }
    
    // Play sound with error handling
    try {
        received.play().catch(e => console.log("Audio play failed:", e));
    } catch (e) {
        console.log("Audio not supported");
    }
}

function closeChatBot() {
    // Add closing animation
    chatbot.style.animation = "slideOutDown 0.3s ease-in";
    
    setTimeout(() => {
        chatbot.style.display = "none";
        document.querySelector(".chatbot-handler img").style.display = "block";
        document.querySelector(".chatbot-handler i").style.display = "none";
    }, 300);
}

function greet() {
    const hour = new Date().getHours();
    const welcomeTypes = ["Good morning", "Good afternoon", "Good evening"];
    let welcomeText = "";
    
    if (hour < 12) welcomeText = welcomeTypes[0];
    else if (hour < 18) welcomeText = welcomeTypes[1];
    else welcomeText = welcomeTypes[2];

    setBotText(welcomeText + " Sir/Ma'am! Welcome to RK International School. How may I assist you today? 🎓");
    
    setTimeout(() => {
        setBotText(`<div class="quick-options">
            <a class='btn' href='./pages/contact-us.php'>📞 Contact Us</a>
            <a class='btn' href='./pages/contact-us.php'>📍 Location</a>
            <a class='btn' href='./register.php'>📝 Admission Enquiry</a>
        </div>`);
    }, 1500);
}

function clearInput() {
    usr_msg.value = "";
}

function clearChatBox() {
    textbox.innerHTML = "";
    messageHistory = [];
}

// Enhanced setBotText with better typing animation
function setBotText(txt) {
    if (isTyping) return;
    
    isTyping = true;
    
    // Create typing indicator
    let typingDiv = document.createElement("div");
    typingDiv.classList.add("chatbot_txt", "typing-indicator");
    typingDiv.innerHTML = `<div class="msg">
        <div class="typing-animation">
            <span></span><span></span><span></span>
        </div>
    </div>`;
    
    textbox.appendChild(typingDiv);
    scrollDown();

    // Simulate typing delay based on message length
    const typingDelay = Math.min(Math.max(txt.length * 30, 800), 2000);
    
    setTimeout(() => {
        // Remove typing indicator
        textbox.removeChild(typingDiv);
        
        // Add actual message
        let div = document.createElement("div");
        div.classList.add("chatbot_txt");
        
        // Add timestamp
        const timestamp = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        div.innerHTML = `<div class="msg">${txt}</div><div class="timestamp">${timestamp}</div>`;
        
        textbox.appendChild(div);
        scrollDown();
        
        // Store in history
        messageHistory.push({ type: 'bot', message: txt, timestamp: new Date() });
        
        isTyping = false;
        
        // Play sound with error handling
        try {
            received.play().catch(e => console.log("Audio play failed:", e));
        } catch (e) {
            console.log("Audio not supported");
        }
    }, typingDelay);
}

function setUsrText(txt) {
    let div = document.createElement("div");
    div.classList.add("usr_txt");
    
    // Add timestamp
    const timestamp = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
    div.innerHTML = `<div class="msg">${txt}</div><div class="timestamp">${timestamp}</div>`;
    
    textbox.appendChild(div);
    scrollDown();
    
    // Store in history
    messageHistory.push({ type: 'user', message: txt, timestamp: new Date() });
    
    // Play sound with error handling
    try {
        sent.play().catch(e => console.log("Audio play failed:", e));
    } catch (e) {
        console.log("Audio not supported");
    }
}

// Enhanced algorithm with fuzzy matching
function chatbot_algorithm(msg) {
    const originalMsg = msg;
    msg = msg.toLowerCase().trim();
    
    // Handle empty messages
    if (!msg) {
        setBotText("Please type a message to continue our conversation. 😊");
        return;
    }

    // Direct match first
    if (QuestionMap[msg]) {
        setBotText(QuestionMap[msg]);
        return;
    }

    // Check redirect questions
    if (redirectQuestions[msg]) {
        if (redirectQuestions[msg] === "redirect to admission enquiry") {
            setBotText("I'd be happy to help you with admission information! For detailed admission process and requirements, please visit our admission enquiry page or contact us directly.");
            setTimeout(() => {
                setBotText(`<div class="quick-options">
                    <a class='btn' href='./register.php'>📝 Admission Form</a>
                    <a class='btn' href='./pages/contact-us.php'>📞 Contact Admission Office</a>
                </div>`);
            }, 1000);
        }
        return;
    }

    // Fuzzy matching using keywords
    const matchedResponse = fuzzyMatch(msg);
    if (matchedResponse) {
        setBotText(matchedResponse);
        return;
    }

    // Enhanced fallback response
    setBotText("🤔 I'm not sure I understand that completely. Could you please rephrase your question or choose from the options below?");
    
    setTimeout(() => {
        setBotText(`<div class="quick-options">
            <a class='btn' href='./pages/contact-us.php'>📞 Contact Us</a>
            <a class='btn' href='./pages/contact-us.php'>📍 Location</a>
            <a class='btn' href='./register.php'>📝 Admission Enquiry</a>
        </div>`);
    }, 1000);
}

// Enhanced fuzzy matching function
function fuzzyMatch(msg) {
    // Check for keywords in the message
    for (const [category, words] of Object.entries(keywords)) {
        for (const word of words) {
            if (msg.includes(word)) {
                return getResponseByCategory(category);
            }
        }
    }
    
    // Check for partial matches in existing questions
    for (const [question, answer] of Object.entries(QuestionMap)) {
        if (msg.includes(question.split(' ')[0]) || question.includes(msg.split(' ')[0])) {
            return answer;
        }
    }
    
    return null;
}

function getResponseByCategory(category) {
    const responses = {
        admission: "For admission information, please contact our admission office at 8587820850 or visit our admission enquiry page. We'll be happy to guide you through the process! 📝",
        fee: "For detailed fee structure, please contact us at 8587820850 or visit our campus. Our admission team will provide you with comprehensive fee information. 💰",
        contact: "You can reach us at 8587820850 or visit our Contact Us page. Our team is ready to assist you! 📞",
        location: "Please visit our Contact Us page for detailed location information and directions to our campus. 📍",
        facilities: "We have excellent facilities including modern classrooms, labs, library, and sports facilities. Would you like specific information about any facility? 🏫",
        timing: "School timings vary by class. Please contact us at 8587820850 for specific timing information for your requirements. ⏰"
    };
    
    return responses[category] || null;
}

function takeUsrInput() {
    let msg = usr_msg.value.trim();
    
    if (!msg) {
        usr_msg.placeholder = "Please type your message...";
        usr_msg.style.borderColor = "#ff6b6b";
        setTimeout(() => {
            usr_msg.style.borderColor = "";
            usr_msg.placeholder = "Reply Here...";
        }, 2000);
        return;
    }
    
    if (isTyping) {
        setBotText("Please wait, I'm still typing... 😊");
        return;
    }
    
    setUsrText(msg);
    chatbot_algorithm(msg);
    clearInput();
}

function scrollDown() {
    textbox.scrollTop = textbox.scrollHeight;
}

// Enhanced event listeners
document.addEventListener('DOMContentLoaded', function() {
    initializeChatbot();
    
    // Input event listeners
    if (usr_msg) {
        usr_msg.addEventListener("keydown", (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                takeUsrInput();
            }
        });
        
        // Add typing indicator for user
        usr_msg.addEventListener("input", () => {
            if (usr_msg.value.trim()) {
                usr_msg.style.borderColor = "#4CAF50";
            } else {
                usr_msg.style.borderColor = "";
            }
        });
    }
    
    // Add click outside to close functionality
    document.addEventListener('click', function(event) {
        const isClickInsideChatbot = chatbot && chatbot.contains(event.target);
        const isClickOnHandler = event.target.closest('.chatbot-handler');
        
        if (!isClickInsideChatbot && !isClickOnHandler && chatbot && chatbot.style.display === 'block') {
            // Don't auto-close, but add a subtle animation to indicate interaction
            chatbot.style.animation = "pulse 0.3s ease-in-out";
            setTimeout(() => {
                chatbot.style.animation = "";
            }, 300);
        }
    });
});

// Add CSS animations dynamically
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInUp {
        from { transform: translateY(100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    @keyframes slideOutDown {
        from { transform: translateY(0); opacity: 1; }
        to { transform: translateY(100%); opacity: 0; }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }
    
    .typing-animation {
        display: flex;
        gap: 3px;
        padding: 10px;
    }
    
    .typing-animation span {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #999;
        animation: typing 1.4s infinite ease-in-out;
    }
    
    .typing-animation span:nth-child(1) { animation-delay: 0s; }
    .typing-animation span:nth-child(2) { animation-delay: 0.2s; }
    .typing-animation span:nth-child(3) { animation-delay: 0.4s; }
    
    @keyframes typing {
        0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
        30% { transform: translateY(-10px); opacity: 1; }
    }
    
    .quick-options {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: 10px;
    }
    
    .quick-options .btn {
        padding: 8px 12px;
        border-radius: 20px;
        text-align: center;
        font-size: 11px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .quick-options .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    .timestamp {
        font-size: 10px;
        color: #666;
        text-align: right;
        margin-top: 5px;
        opacity: 0.7;
    }
    
    .chatbot_txt .timestamp {
        text-align: left;
    }
    
    .usr_txt .timestamp {
        text-align: right;
    }
`;

document.head.appendChild(style);

// Export for debugging (development only)
if (typeof window !== 'undefined') {
    window.chatbotDebug = {
        messageHistory,
        QuestionMap,
        redirectQuestions,
        keywords
    };
}
