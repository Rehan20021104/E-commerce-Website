/*nav bar in media device*/

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    });
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    });
}

/*product to single product*/

document.addEventListener("DOMContentLoaded", function () {
    // Get the products parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const productsParam = urlParams.get("products");

    if (productsParam) {
        // Split the products parameter into an array of IDs
        const productIds = productsParam.split(',');

        // Hide all sections initially
        const allSections = document.querySelectorAll("section");
        allSections.forEach(section => section.style.display = "none");

        // Show only the specified sections
        productIds.forEach(productId => {
            const section = document.getElementById(productId);
            if (section) {
                section.style.display = "block"; // Show the section
            } else {
                console.warn("Section not found for ID: " + productId);
            }
        });
    } else {
        console.log("No products specified in the query string.");
    }
});


/*single prdouct*/

var productSections = document.querySelectorAll(".section-p1");
productSections.forEach((section) => {
    var MainImg = section.querySelector("#MainImg");
    var SmallImgs = section.querySelectorAll(".small-img");
    SmallImgs.forEach((smallImg, index) => {
        smallImg.onclick = function () {
            MainImg.src = smallImg.src;
        };
    });
});


/*add comment*/

        function addComment(productId) {
            const commentInput = document.getElementById(`commentInput${productId}`);
            const commentText = commentInput.value.trim();
            
            if (!commentText) {
                alert("Please enter a comment.");
                return;
            }
            
            const commentsContainer = document.getElementById(`comments${productId}`);
            
            // Create a new comment element
            const newComment = document.createElement('div');
            newComment.classList.add('comment');
            newComment.innerHTML = `<p><strong>You:</strong> ${commentText}</p>`;
            
            // Add the new comment to the comments container
            commentsContainer.appendChild(newComment);
            
            // Clear the input field
            commentInput.value = '';
        }
        






