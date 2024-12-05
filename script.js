function openModal(imageSrc, title, author, price) {
    document.getElementById("modalImage").src = imageSrc;
    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalAuthor").textContent = `by ${author}`;
    document.getElementById("modalPrice").textContent = `Price: RS. ${price}`;
    document.getElementById("bookModal").style.display = "block";

    document.getElementById("chatButton").onclick = function() {
        showChatbox(title); 
    };
}

function showChatbox(title) {
    const chatboxId = `chatbox-${title.replace(/\s+/g, '-').toLowerCase()}`;

    let chatbox = document.getElementById(chatboxId);
    if (!chatbox) {
        chatbox = document.createElement("div");
        chatbox.id = chatboxId;
        chatbox.className = "chatbox";
        chatbox.innerHTML = `
            <div class="chatbox-header">
                <h4>Chat with the owner of "${title}"</h4>
                <button onclick="closeChat('${chatboxId}')">Close</button>
            </div>
            <div class="chatbox-body"></div>
            <div class="chatbox-footer">
                <input type="text" id="chatInput-${title.replace(/\s+/g, '-').toLowerCase()}" placeholder="Type a message">
                <button onclick="sendMessage('${chatboxId}', 'chatInput-${title.replace(/\s+/g, '-').toLowerCase()}')">Send</button>
            </div>
        `;
        document.body.appendChild(chatbox);
    }

    chatbox.style.display = "block";
}

function closeModal() {
    document.getElementById("bookModal").style.display = "none";
}

function closeChat(chatboxId) {
    const chatbox = document.getElementById(chatboxId);
    if (chatbox) chatbox.style.display = "none";
}

function sendMessage(chatboxId, inputId) {
    const chatInput = document.getElementById(inputId);
    const message = chatInput.value.trim();
    if (message) {
        const chatBody = document.querySelector(`#${chatboxId} .chatbox-body`);
        const userMessage = document.createElement("p");
        userMessage.className = "message user";
        userMessage.textContent = message;
        chatBody.appendChild(userMessage);
        chatInput.value = ""; 
        chatBody.scrollTop = chatBody.scrollHeight; 
    }
}

