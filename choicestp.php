
<!DOCTYPE html>
<html>
<head>
    <title>Occupational Guidance System</title>
    <style>
input[type="radio"]:checked {
            background-color: #ff5e00; /* Change background color when checked */
        }
        body {
            text-align: center;
font-family:Arial,sans-serif;
 background-color: #c44b14;

        }
        .question-container {
            max-width: 600px; /* Limit the width of the container */
            margin: 50px auto; /* Center the container */
            text-align: left; /* Align text to the left within the container */background-color: #fff; 
padding: 20px;
border-radius: 10px;
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .question {
            display: none; /* Hide questions by default */
        }
        .question.active {
            display: block; /* Show active question */
        }
        label {
            display: block; /* Ensure each label is displayed as a block element */
            cursor: pointer; /* Change cursor to pointer */
        }
        .next-button, .prev-button {
            margin-top: 20px; /* Add margin to the top of buttons */
 margin-top: 20px;
 padding: 10px 20px;
 background-color: #ff5e00;
color: #fff;
            border: none; 
            border-radius: 5px;
cursor: pointer; 
            transition: background-color 0.3s;
            
        }

    </style>
</head>
<?php include 'headers.php'?>
<body style="background-color: #f1510777; ">
    <div class="question-container">
        <!-- Science Questions -->
        <div class="question active" id="science-question1">
            
            <p>What aspect of the natural world intrigues you the most?</p>
            <label><input type="radio" name="s1" value="option1" onclick="moveToNextQuestion('science-question2')"> The diversity of ecosystems and species</label><br>
            <label><input type="radio" name="s1" value="option2" onclick="moveToNextQuestion('science-question2')"> The mysteries of outer space and the universe</label><br>
            <label><input type="radio" name="s1" value="option3" onclick="moveToNextQuestion('science-question2')"> The complexities of the human body and biology</label><br>
            <label><input type="radio" name="s1" value="option4" onclick="moveToNextQuestion('science-question2')"> The laws governing matter and energy</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="science-question2">
           
            <p>Have you always enjoyed conducting experiments and exploring scientific phenomena?</p>
            <label><input type="radio" name="s2" value="option1" onclick="moveToNextQuestion('science-question3')">Yes, I love experimenting and observing natural phenomena.</label><br>
            <label><input type="radio" name="s2" value="option2" onclick="moveToNextQuestion('science-question3')">Not particularly, but I'm open to exploring it further.</label><br>
            <label><input type="radio" name="s2" value="option3" onclick="moveToNextQuestion('science-question3')">No, I prefer theoretical concepts over hands-on experiments.</label><br>
            <label><input type="radio" name="s2" value="option4" onclick="moveToNextQuestion('science-question3')">I haven't had much exposure to scientific experiments.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="science-question3">
            
            <p>Are you drawn to subjects like physics, chemistry, biology, or environmental science?</p>
            <label><input type="radio" name="s3" value="option1" onclick="moveToNextQuestion('science-question4')">Physics and astronomy</label><br>
            <label><input type="radio" name="s3" value="option2" onclick="moveToNextQuestion('science-question4')">Chemistry and materials science</label><br>
            <label><input type="radio" name="s3" value="option3" onclick="moveToNextQuestion('science-question4')">Biology and life sciences</label><br>
            <label><input type="radio" name="s3" value="option4" onclick="moveToNextQuestion('science-question4')">Environmental science and sustainability studies</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="science-question4">
            
            <p>Do you have a knack for problem-solving and analytical thinking?</p>
            <label><input type="radio" name="s4" value="option1" onclick="moveToNextQuestion('science-question5')">Yes, I enjoy solving complex problems and puzzles.</label><br>
            <label><input type="radio" name="s4" value="option2" onclick="moveToNextQuestion('science-question5')">Not particularly, but I'm willing to develop these skills.</label><br>
            <label><input type="radio" name="s4" value="option3" onclick="moveToNextQuestion('science-question5')"> No, I prefer creative or artistic endeavors.</label><br>
            <label><input type="radio" name="s4" value="option4" onclick="moveToNextQuestion('science-question5')">I haven't had much opportunity to test my problem-solving skills.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="science-question5">
            
            <p>Are you interested in pursuing a career in academia, research, medicine, engineering, or another scientific field?</p>
            <label><input type="radio" name="s5" value="option1" onclick="moveToNextQuestion('science-question6')"> I'm not sure about my career goals yet.</label><br>
            <label><input type="radio" name="s5" value="option2" onclick="moveToNextQuestion('science-question6')">Definitely, I aspire to become a scientist or researcher.</label><br>
            <label><input type="radio" name="s5" value="option3" onclick="moveToNextQuestion('science-question6')">Maybe, I'm still exploring my options in the sciences.</label><br>
            <label><input type="radio" name="s5" value="option4" onclick="moveToNextQuestion('science-question6')">Not really, I'm considering other career paths.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="science-question6">
            
            <p>Do you enjoy keeping up with the latest scientific discoveries and developments?</p>
            <label><input type="radio" name="s6" value="option1" onclick="moveToNextQuestion('science-question7')">Yes, I find it exciting to stay updated on scientific breakthroughs.</label><br>
            <label><input type="radio" name="s6" value="option2" onclick="moveToNextQuestion('science-question7')">Occasionally, if it's relevant to my interests.</label><br>
            <label><input type="radio" name="s6" value="option3" onclick="moveToNextQuestion('science-question7')">Not really, I prefer focusing on other interests.</label><br>
            <label><input type="radio" name="s6" value="option4" onclick="moveToNextQuestion('science-question7')">I haven't paid much attention to scientific news.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="science-question7">
           
            <p>Have you participated in any science-related extracurricular activities or competitions?</p>
            <label><input type="radio" name="s7" value="option1" onclick="moveToNextQuestion('commerce-question1')">Yes, I've been actively involved in science clubs or competitions.</label><br>
            <label><input type="radio" name="s7" value="option2" onclick="moveToNextQuestion('commerce-question1')">No, but I'm interested in exploring such opportunities.</label><br>
            <label><input type="radio" name="s7" value="option3" onclick="moveToNextQuestion('commerce-question1')">Not really, I haven't found science-related activities appealing.</label><br>
            <label><input type="radio" name="s7" value="option4" onclick="moveToNextQuestion('commerce-question1')">I haven't had the chance to participate in extracurriculars.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>
        <!-- Add more Science questions -->

        <!-- Commerce Questions -->
        <div class="question" id="commerce-question1">
            
            <p>What aspects of the business world pique your interest the most?</p>
            <label><input type="radio" name="c1" value="option1" onclick="moveToNextQuestion('commerce-question2')"> Economics and market dynamics</label><br>
            <label><input type="radio" name="c1" value="option2" onclick="moveToNextQuestion('commerce-question2')"> Finance and investment strategies</label><br>
            <label><input type="radio" name="c1" value="option3" onclick="moveToNextQuestion('commerce-question2')"> Marketing and consumer behavior</label><br>
            <label><input type="radio" name="c1" value="option4" onclick="moveToNextQuestion('commerce-question2')"> Entrepreneurship and business innovation</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="commerce-question2">
            
            <p>Have you always been intrigued by concepts like supply and demand, market analysis, and strategic decision-making?</p>
            <label><input type="radio" name="c2" value="option1" onclick="moveToNextQuestion('commerce-question3')">Yes, I find the dynamics of the business world fascinating.</label><br>
            <label><input type="radio" name="c2" value="option2" onclick="moveToNextQuestion('commerce-question3')">Not particularly, but I'm willing to learn more about these concepts.</label><br>
            <label><input type="radio" name="c2" value="option3" onclick="moveToNextQuestion('commerce-question3')">No, I prefer other areas of study over business-related topics.</label><br>
            <label><input type="radio" name="c2" value="option4" onclick="moveToNextQuestion('commerce-question3')">I haven't had much exposure to business concepts.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="commerce-question3">
           
            <p>Are you interested in learning about various business models, industries, and global markets?</p>

            <label><input type="radio" name="c3" value="option1" onclick="moveToNextQuestion('commerce-question4')">Absolutely, I see value in understanding the broader context of business operations.</label><br>
            <label><input type="radio" name="c3" value="option2" onclick="moveToNextQuestion('commerce-question4')">Maybe, if it helps me identify potential career paths or opportunities.</label><br>
            <label><input type="radio" name="c3" value="option3" onclick="moveToNextQuestion('commerce-question4')">Not really, I prefer to focus on more specialized areas of study.</label><br>
            <label><input type="radio" name="c3" value="option4" onclick="moveToNextQuestion('commerce-question4')">I haven't given much thought to studying different aspects of business.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="commerce-question4">
            
            <p>Do you possess strong communication, negotiation, and leadership skills?</p>

            <label><input type="radio" name="c4" value="option1" onclick="moveToNextQuestion('commerce-question5')">Yes, I excel in interpersonal skills and leadership roles.</label><br>
            <label><input type="radio" name="c4" value="option2" onclick="moveToNextQuestion('commerce-question5')">Somewhat, but I'm willing to develop these skills further.</label><br>
            <label><input type="radio" name="c4" value="option3" onclick="moveToNextQuestion('commerce-question5')">No, I prefer to work independently rather than in team settings.</label><br>
            <label><input type="radio" name="c4" value="option4" onclick="moveToNextQuestion('commerce-question5')">I haven't had many opportunities to develop these skills.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="commerce-question5">
            
            <p>Are you entrepreneurial-minded and interested in starting your own business or working in a startup environment?
            </p>

            <label><input type="radio" name="c5" value="option1" onclick="moveToNextQuestion('commerce-question6')">Absolutely, I'm passionate about entrepreneurship and innovation.</label><br>
            <label><input type="radio" name="c5" value="option2" onclick="moveToNextQuestion('commerce-question6')">Maybe, if the right opportunity presents itself.</label><br>
            <label><input type="radio" name="c5" value="option3" onclick="moveToNextQuestion('commerce-question6')">Not really, I prefer the stability of established companies or organizations.</label><br>
            <label><input type="radio" name="c5" value="option4" onclick="moveToNextQuestion('commerce-question6')">I haven't considered entrepreneurship as a career path.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="commerce-question6">
           
            <p>Have you gained any practical experience through internships, part-time jobs, or extracurricular activities related to business?</p>

            <label><input type="radio" name="c6" value="option1" onclick="moveToNextQuestion('commerce-question7')">Yes, I've had hands-on experience in various business-related roles.</label><br>
            <label><input type="radio" name="c6" value="option2" onclick="moveToNextQuestion('commerce-question7')">No, but I'm eager to gain practical experience in the business field.</label><br>
            <label><input type="radio" name="c6" value="option3" onclick="moveToNextQuestion('commerce-question7')">Not really, I haven't found business-related opportunities appealing.</label><br>
            <label><input type="radio" name="c6" value="option4" onclick="moveToNextQuestion('commerce-question7')">I haven't had the chance to explore business-related activities.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        
        <div class="question" id="commerce-question7">
            
            <p>Are you interested in pursuing professional certifications or advanced degrees in fields like accounting, finance, marketing, or business analytics?</p>

            <label><input type="radio" name="c7" value="option1" onclick="moveToNextQuestion('arts-question1')">Absolutely, I see value in understanding the broader context of business operations.</label><br>
            <label><input type="radio" name="c7" value="option2" onclick="moveToNextQuestion('arts-question1')">Maybe, if it helps me identify potential career paths or opportunities.</label><br>
            <label><input type="radio" name="c7" value="option3" onclick="moveToNextQuestion('arts-question1')">Not really, I prefer to focus on more specialized areas of study.</label><br>
            <label><input type="radio" name="c7" value="option4" onclick="moveToNextQuestion('arts-question1')">I haven't given much thought to studying different aspects of business.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>
        <!-- Add more Commerce questions -->

        <!-- Arts Questions -->
        <div class="question" id="arts-question1">
           
            <p>What forms of artistic expression do you find most captivating?</p>
            <label><input type="radio" name="a1" value="option1" onclick="moveToNextQuestion('arts-question2')"> Visual arts (painting, sculpture, photography)</label><br>
            <label><input type="radio" name="a1" value="option2" onclick="moveToNextQuestion('arts-question2')"> Performing arts (music, theater, dance)</label><br>
            <label><input type="radio" name="a1" value="option3" onclick="moveToNextQuestion('arts-question2')"> Literary arts (writing, poetry, storytelling)</label><br>
            <label><input type="radio" name="a1" value="option4" onclick="moveToNextQuestion('arts-question2')"> All of the above</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="arts-question2">
           
            <p>Have you always enjoyed expressing yourself creatively through art, writing, music, or other means?</p>
            <label><input type="radio" name="a2" value="option1" onclick="moveToNextQuestion('arts-question3')"> Yes, I love channeling my creativity into various forms of expression.</label><br>
            <label><input type="radio" name="a2" value="option2" onclick="moveToNextQuestion('arts-question3')">Not particularly, but I'm open to exploring my creative side.</label><br>
            <label><input type="radio" name="a2" value="option3" onclick="moveToNextQuestion('arts-question3')">No, I prefer more structured or analytical activities.</label><br>
            <label><input type="radio" name="a2" value="option4" onclick="moveToNextQuestion('arts-question3')">I haven't had much opportunity to explore creative pursuits.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
<!--<button class="next-button" type="submit" onclick="gradeQuiz()">Submit</button>-->

        </div>
        <div class="question" id="arts-question3">
            
            <p>Are you interested in studying art history, theory, or criticism, in addition to creating your own artwork?</p>
            <label><input type="radio" name="a3" value="option1" onclick="moveToNextQuestion('arts-question4')"> Absolutely, I find the historical and theoretical aspects of art fascinating.</label><br>
            <label><input type="radio" name="a3" value="option2" onclick="moveToNextQuestion('arts-question4')">Maybe, if it enhances my understanding of artistic concepts. </label><br>
            <label><input type="radio" name="a3" value="option3" onclick="moveToNextQuestion('arts-question4')"> Not really, I prefer focusing on practical skills and techniques.</label><br>
            <label><input type="radio" name="a3" value="option4" onclick="moveToNextQuestion('arts-question4')">I haven't thought much about studying art beyond creating it.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="arts-question4">
            
            <p>Do you have a natural talent or inclination towards a particular art form or medium?</p>
            <label><input type="radio" name="a4" value="option1" onclick="moveToNextQuestion('arts-question5')">Yes, I excel in a specific art form or medium. </label><br>
            <label><input type="radio" name="a4" value="option2" onclick="moveToNextQuestion('arts-question5')">Not sure, I enjoy experimenting with different mediums. </label><br>
            <label><input type="radio" name="a4" value="option3" onclick="moveToNextQuestion('arts-question5')">No, I haven't found a particular art form that resonates with me. </label><br>
            <label><input type="radio" name="a4" value="option4" onclick="moveToNextQuestion('arts-question5')"> I haven't explored enough to know my strengths in art.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="arts-question5">
            
            <p>Are you passionate about using art as a means of social commentary, cultural expression, or personal exploration?</p>
            <label><input type="radio" name="a5" value="option1" onclick="moveToNextQuestion('arts-question6')"> Absolutely, I believe art has the power to provoke thought and inspire change.</label><br>
            <label><input type="radio" name="a5" value="option2" onclick="moveToNextQuestion('arts-question6')"> Somewhat, if it aligns with my values and interests.</label><br>
            <label><input type="radio" name="a5" value="option3" onclick="moveToNextQuestion('arts-question6')">Not really, I see art as more of a personal or recreational pursuit.</label><br>
            <label><input type="radio" name="a5" value="option4" onclick="moveToNextQuestion('arts-question6')">I haven't considered the broader impact of art beyond individual expression.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="arts-question6">
           
            <p>Have you showcased your artwork, performed on stage, or published your writing in any public forums?</p>
            <label><input type="radio" name="a6" value="option1" onclick="moveToNextQuestion('arts-question7')"> Yes, I've actively shared my creative work with others.</label><br>
            <label><input type="radio" name="a6" value="option2" onclick="moveToNextQuestion('arts-question7')">No, but I'm interested in opportunities to showcase my talents.</label><br>
            <label><input type="radio" name="a6" value="option3" onclick="moveToNextQuestion('arts-question7')"> Not really, I prefer to keep my creative pursuits private.</label><br>
            <label><input type="radio" name="a6" value="option4" onclick="moveToNextQuestion('arts-question7')">  I haven't had the chance to share my creative work publicly.</label><br>
<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        </div>

        <div class="question" id="arts-question7">
           
            <p>Are you interested in exploring interdisciplinary approaches that combine art with other fields such as technology, psychology, or social sciences?</p>
            <label><input type="radio" name="a7" value="option1" onclick="moveToNextQuestion('arts-question')"> Yes, I'm excited about the possibilities of blending art with other disciplines.</label><br>
            <label><input type="radio" name="a7" value="option2" onclick="moveToNextQuestion('arts-question')"> Maybe, if it enhances my artistic practice or opens up new avenues of exploration.</label><br>
            <label><input type="radio" name="a7" value="option3" onclick="moveToNextQuestion('arts-question')">Not really, I prefer to focus solely on artistic pursuits. </label><br>
            <label><input type="radio" name="a7" value="option4" onclick="moveToNextQuestion('arts-question')"> I haven't considered interdisciplinary approaches to art.</label><br>
<!--<button class="next-button" type="button" id="nextButton" onclick="nextQuestion()">Next</button>-->
        <button class="prev-button" type="button" onclick="prevQuestion()">Previous</button>
        <button class="next-button" type="submit" onclick="gradeQuiz()">Submit</button>
        </div>

        <!-- Add more Arts questions -->

        
        <div id="unansweredQuestions"></div> <!-- Div to display unanswered questions -->
        <div id="resultLabel"></div> <!-- Div to display result message -->
    </div>

    <script>
        function moveToNextQuestion(nextQuestionId) {
    var activeQuestion = document.querySelector('.question.active');
    activeQuestion.classList.remove('active'); // Hide current question

    var nextQuestion = document.getElementById(nextQuestionId);
    if (nextQuestion) {
        nextQuestion.classList.add('active'); // Show next question
    } else {
        // If next question doesn't exist, show the last question again
        var questions = document.querySelectorAll('.question');
        var lastQuestion = questions[questions.length - 1];
        lastQuestion.classList.add('active');
    }
}


        function prevQuestion() {
            var activeQuestion = document.querySelector('.question.active');
            if (activeQuestion.previousElementSibling) {
                activeQuestion.classList.remove('active'); // Hide current question
                activeQuestion.previousElementSibling.classList.add('active'); // Show previous question
                // Scroll to the previous question
                activeQuestion.previousElementSibling.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function nextQuestion() {
            var activeQuestion = document.querySelector('.question.active');
            if (activeQuestion.nextElementSibling) {
                activeQuestion.classList.remove('active'); // Hide current question
                activeQuestion.nextElementSibling.classList.add('active'); // Show previous question
                // Scroll to the previous question
                activeQuestion.nextElementSibling.scrollIntoView({ behavior: 'smooth' });
            }        }

        function gradeQuiz() {
    let scienceScore = 0;
    let commerceScore = 0;
    let artsScore = 0;

    // Calculate scores for Science questions
    const scians1 = document.querySelector(`input[name="s1"]:checked`);
    if (scians1) {
            switch (scians1.value) {
                case "option1":
                    scienceScore++;
                    break;
                case "option2":
                    scienceScore++;
                    break;
                case "option3":
                    scienceScore++;
                    break;
                case "option4":
                    scienceScore++;
                    break;
            }
        }
        const scians3 = document.querySelector(`input[name="s3"]:checked`);
    if (scians3) {
            switch (scians3.value) {
                case "option1":
                    scienceScore++;
                    break;
                case "option2":
                    scienceScore++;
                    break;
                case "option3":
                    scienceScore++;
                    break;
                case "option4":
                    scienceScore++;
                    break;
            }
        }
    for (let i = 1; i <= 7; i++) {
        const answer = document.querySelector(`input[name="s${i}"]:checked`);
        if (answer) {
            switch (answer.value) {
                case "option1":
                    scienceScore++;
                    break;
                case "option2":
                    scienceScore++;
                    break;
                
            }
        }
        else {
            // Deselect some number of questions if no answer is selected
            // You can add your condition here to deselect certain questions
            // For example, let's deselect questions 3 and 5
            if (i === 1 && i === 3) {
                scienceScore--; // Decrease the score if the question was initially selected
            }
        }

    }

    // Calculate scores for Commerce questions
    const commans1 = document.querySelector(`input[name="c1"]:checked`);
    if (commans1) {
            switch (commans1.value) {
                case "option1":
                    commerceScore++;
                    break;
                case "option2":
                    commerceScore++;
                    break;
                case "option3":
                    commerceScore++;
                    break;
                case "option4":
                    commerceScore++;
                    break;
            }
        }
    for (let i = 1; i <= 7; i++) {
        const answer = document.querySelector(`input[name="c${i}"]:checked`);
        if (answer) {
            switch (answer.value) {
                case "option1":
                    commerceScore++;
                    break;
                case "option2":
                    commerceScore++;
                    break;
                
            }
        }
        else {
            
            if (i === 1 ) {
                commerceScore--; // Decrease the score if the question was initially selected
            }
        }
    }

    // Calculate scores for Arts questions
    const artsans1 = document.querySelector(`input[name="a1"]:checked`);
    if (artsans1) {
            switch (artsans1.value) {
                case "option1":
                    artsScore++;
                    break;
                case "option2":
                    artsScore++;
                    break;
                case "option3":
                    artsScore++;
                    break;
                case "option4":
                    artsScore++;
                    break;
            }
        }
        const artsans4 = document.querySelector(`input[name="a4"]:checked`);
    if (artsans4) {
            switch (artsans4.value) {
                case "option1":
                    artsScore++;
                    break;
               
            }
        }

    for (let i = 1; i <= 7; i++) {
        const answer = document.querySelector(`input[name="a${i}"]:checked`);
        if (answer) {
            switch (answer.value) {
                case "option1":
                    artsScore++;
                    break;
                case "option2":
                    artsScore++;
                    break;
               
            }
        }
        else {
            
            if (i === 1 && i===4 ) {
                artsScore--; // Decrease the score if the question was initially selected
            }
        }
    }

    // Determine the field with the highest score
    let maxScore = Math.max(scienceScore, commerceScore, artsScore);
    let result = "";
    if (maxScore === scienceScore) {
        result = `Science `;
        
        window.location.href="science.php";
    } else if (maxScore === commerceScore) {
        result = `Commerce `;
        window.location.href=`commerce.php`;
    } else if (maxScore === artsScore)  {
        result = `Arts  `;
        window.location.href=`arts.php`;
    }

   // Redirect to result page with the determined field
    window.location.href = `result_page.php?result=${result}`;
 
        
}

    
    </script>
</body>
</html>
