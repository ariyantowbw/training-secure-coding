<style>
    /* Basic styling for FAQ */
    .faq-container {
        width: 100%;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .faq-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .faq-item {
        margin-bottom: 15px;
    }

    .faq-question {
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        color: #007BFF;
        transition: color 0.3s ease;
    }

    .faq-question:hover {
        color: #0056b3;
    }

    .faq-answer {
        display: none;
        font-size: 16px;
        margin-top: 10px;
        padding-left: 20px;
        color: #555;
    }

    .faq-answer.show {
        display: block;
    }
</style>

<div class="faq-container">
    <div class="faq-title">Frequently Asked Questions</div>

    <div class="faq-item">
        <div class="faq-question">What is your return policy?</div>
        <div class="faq-answer">
            Our return policy allows you to return products within 30 days of purchase. Items must be unused and in their original packaging.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">How can I track my order?</div>
        <div class="faq-answer">
            You can track your order using the tracking number sent to your email after your order has been dispatched.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">Do you offer international shipping?</div>
        <div class="faq-answer">
            Yes, we offer international shipping to most countries. Shipping costs and delivery times vary based on the destination.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">What payment methods do you accept?</div>
        <div class="faq-answer">
            We accept major credit and debit cards, PayPal, and Apple Pay.
        </div>
    </div>
</div>

<script>
    // JavaScript to toggle FAQ answers visibility
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            answer.classList.toggle('show');
        });
    });
</script>