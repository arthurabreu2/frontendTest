### :speaking_head: Instructions
<img src="https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png" min-width="400px" max-width="400px" width="400px" align="right" alt="TomDatalab">

<p align="left"> 
  Choose a quiet and peaceful place to perform the tests. The main objective is that we can understand the level of knowledge of the candidate. Be honest with your answers. There is no pre-established time for completing the tests, <strong>do your best</strong>.<br>
</p>

## <img width="45" alt="about" src="https://raw.github.com/elizarov/elizarov/master/about.png"> Good luck !

:blue_book: <strong><b>1)</b></strong> What skills does a front-end developer need?

:blue_book: <strong><b>Resposta:</b></strong> Every front-end developer needs to develop both hard skills and soft skills. In summary, individuals pursuing this career as developers code websites and applications. Above all, they master certain technologies, concepts, and tools. Among the necessary hard skills to become a great front-end developer are: HTML, CSS, JavaScript, React, Angular, Vue, version control (like Git), UX/UI. Another detail that a front-end developer needs to consider is the SEO (Search Engine Optimization) of the website, ensuring its visibility on search engines like Google. Soft skills are essential for fulfilling this role, they can greatly assist in personal development within a company, handling heavy workloads, and standing out. Essential soft skills include: creativity, effective communication, working under pressure, critical thinking, design awareness, bridging the gap between back-end and UX/UI, problem-solving within your scope, collaborative spirit, flexibility, resilience, and self-learning.

:blue_book: <strong><b>3)</b></strong> Differentiate between div and span?

:blue_book: <strong><b>Resposta:</b></strong> `<div>` is a block-level HTML element used for grouping and structuring larger sections of content. It's commonly styled with CSS and doesn't have inherent meaning.

`<span>` is an inline-level HTML element used for applying styles or targeting specific portions of text within a block of content. It's often used for inline styling purposes.

:blue_book: <strong><b>4)</b></strong> What is React JS?
:blue_book: <strong><b>Resposta:</b></strong> ReactJS is an open-source JavaScript library developed by Facebook that's used for building user interfaces (UIs) in web applications. It follows a component-based architecture, allowing developers to create reusable UI components and compose them to build complex interfaces. One of its core features is the use of a virtual DOM, which optimizes the rendering process by updating only the necessary parts of a web page when the underlying data changes. React uses a declarative syntax, meaning developers describe how the UI should look based on the current application state, making it easier to understand and maintain code. It's widely utilized for creating interactive and responsive front-end interfaces in modern web development.

:blue_book: <strong><b>5)</b></strong> Describe the advantages of REST web services?
:blue_book: <strong><b>Resposta:</b></strong> REST web services offer advantages such as simplicity, scalability, compatibility with various technologies, caching for performance, statelessness simplifying server management, clear separation of client and server roles, resource-centric design, uniform interface for consistency, interoperability across programming languages, security through protocols like HTTPS, ease of testing, and global accessibility.

:blue_book: <strong><b>6)</b></strong> How browsers render the UI?
:blue_book: <strong><b>Resposta:</b></strong> Browsers render the UI by processing HTML to create a document structure, fetching and interpreting CSS for styling, combining HTML and CSS into a renderable tree, calculating layout and dimensions, painting elements onto the screen, and finally, compositing these elements to produce the visible content. JavaScript further enhances interactivity and dynamic changes in the rendered UI.

:blue_book: <strong><b>7)</b></strong> What is a Grid system in CSS?
:blue_book: <strong><b>Resposta:</b></strong> A grid system in CSS is a layout structure that uses rows and columns to arrange and align content on a webpage. It provides a systematic way to create responsive designs by defining how elements should be positioned and sized relative to each other within a grid. This helps in creating consistent and organized layouts for different screen sizes and devices.

:blue_book: <strong><b>8)</b></strong> Describe the distinction between Class and Prototypal inheritance in Javascript?
:blue_book: <strong><b>Resposta:</b></strong> Both methods have their roles, with class inheritance being more recent and structured, while prototypal inheritance is the core mechanism in JavaScript. Class inheritance in JavaScript was introduced in ES6 and uses the class syntax, similar to other languages. It still relies on prototypes but provides a more familiar structure for programmers accustomed to traditional OOP. Prototypal inheritance is the original form of inheritance in JavaScript. Each object has a prototype and inherits properties and methods from that prototype. It doesn't use class syntax and is more flexible.

Here are some examples of both:

<!-- Class Inheritance: 
class Animal {
    // ...
}

class Dog extends Animal {
    // ...
}
-->

<!-- Prototypal Inheritance: 
function Animal(name) {
    // ...
}

function Dog(name, breed) {
    // ...
}

Dog.prototype = Object.create(Animal.prototype);
-->


:blue_book: <strong><b>9)</b></strong> Explain user-centered design?
:blue_book: <strong><b>Resposta:</b></strong> User-centered design (UCD) is an approach that prioritizes designing products and services based on the needs, behaviors, and preferences of users. It involves involving users throughout the design process, iterating designs based on user feedback, and ensuring usability and accessibility. UCD aims to create products that align with user expectations and effectively address their needs.

:blue_book: <strong><b>10)</b></strong> What is ClickJacking?
:blue_book: <strong><b>Resposta:</b></strong> Clickjacking, also known as a "UI redress attack" or "UI redressing," is a malicious technique where a website or web application is designed to deceive users into clicking on something different from what they perceive. In a clickjacking attack, the attacker overlays an invisible or disguised element (such as a button, link, or video) on top of a legitimate website's content. When the user interacts with what they believe is the legitimate content, they're actually interacting with the hidden element, which might lead to unintended actions or security breaches.

The objective of clickjacking is to trick users into performing actions they didn't intend to do, such as:

Liking or sharing content on social media without their consent
Installing malicious software or granting permissions to apps
Making unauthorized transactions or changing account settings
Revealing sensitive information by interacting with disguised input fields

:blue_book: <strong><b>11)</b></strong> Tell me when and why should I make use of Webpack?
:blue_book: <strong><b>Resposta:</b></strong> You should use Webpack when building web applications with multiple files and assets. It helps manage dependencies, optimizes code for production, and provides features like code splitting, hot module replacement, and asset processing. Webpack is especially useful for modern applications with complex structures and dependencies.

:blue_book: <strong><b>12)</b></strong> Mention three ways to decrease page load time?
:blue_book: <strong><b>Resposta:</b></strong> 

Optimize Images:
Compress and resize images to reduce their file size without compromising quality. Use modern image formats like WebP and consider lazy loading images to load them only when they are visible in the viewport.

Minimize HTTP Requests:
Reduce the number of HTTP requests by combining CSS and JavaScript files into fewer files. Implement code splitting and asynchronous loading for non-essential resources. Use a content delivery network (CDN) to distribute assets across multiple servers.

Enable Browser Caching:
Set proper caching headers to allow browsers to store static assets locally. This reduces the need to fetch resources from the server on subsequent visits, resulting in faster page loads for returning users.

These strategies help enhance user experience by ensuring that web pages load quickly and efficiently.

:blue_book: <strong><b>13)</b></strong> How does the server hanger the page in which content is present in several languages?
:blue_book: <strong><b>Resposta:</b></strong> When a server needs to handle a webpage in multiple languages, it uses a process called internationalization (i18n) and localization (l10n). Internationalization involves designing the application to support multiple languages by separating content from code and using language tags. Localization adapts the application to specific languages and regions by translating content, adjusting formats, and considering cultural norms. The server detects user preferences through headers, cookies, or account settings, and uses content negotiation to serve the appropriate version of the content. This ensures users receive content in their preferred language.

:blue_book: <strong><b>14)</b></strong> Why did we utilize the data- the attribute in HTML and why it is now advised not to use?
:blue_book: <strong><b>Resposta:</b></strong> The data-* attribute in HTML was introduced to add custom data to elements. However, it's now cautioned against using it extensively due to concerns about mixing different aspects of code, accessibility issues, and better alternatives provided by modern JavaScript frameworks and libraries.

:blue_book: <strong><b>15)</b></strong> Mention the benefits of CoffeeScript over JavaScript?
:blue_book: <strong><b>Resposta:</b></strong> CoffeeScript offers benefits over JavaScript, such as cleaner syntax, fewer typing requirements, implicit returns, improved function binding, concise array and object comprehensions, and more intuitive class syntax. However, it requires a compilation step and can make debugging more complex. JavaScript has also evolved with improved syntax and features, so the choice between them depends on specific project needs and developer preferences.

:blue_book: <strong><b>16)</b></strong> What is stringify?
:blue_book: <strong><b>Resposta:</b></strong> Stringify is a method typically used in programming languages to convert data structures, such as objects or arrays, into a string representation. In JavaScript, JSON.stringify() is a method used to serialize JavaScript objects into a JSON-formatted string.

:blue_book: <strong><b>17)</b></strong> State all the elements of the CSS Box Model.
:blue_book: <strong><b>Resposta:</b></strong> 
The elements of the CSS Box Model are:

- Content
- Padding
- Border
- Margin

:blue_book: <strong><b>18)</b></strong> What is Progressive Rendering?
:blue_book: <strong><b>Resposta:</b></strong> Progressive rendering is an approach used to optimize webpage loading by displaying content as soon as it becomes available, rather than waiting for the entire page to load. It enhances user experience by showing visible content quickly, even if certain resources are still loading in the background.

:blue_book: <strong><b>19)</b></strong> In an image tag, what is the benefit of the srcset attribute?
:blue_book: <strong><b>Resposta:</b></strong> The srcset attribute in an image tag allows specifying multiple image sources with different resolutions. It helps in responsive web design by letting the browser choose the appropriate image source based on the user's device and screen resolution, leading to improved performance and optimized display quality.

:blue_book: <strong><b>20)</b></strong> Mention the difference between MySQL and MongoDB?
:blue_book: <strong><b>Resposta:</b></strong> MySQL is a relational database management system that uses structured tables and SQL for querying. MongoDB is a NoSQL database that uses a document-oriented model, storing data in flexible, JSON-like documents. MySQL is suitable for structured data, while MongoDB is more flexible for unstructured or semi-structured data.

:blue_book: <strong><b>21)</b></strong> Define the Anonymous function in JS?
:blue_book: <strong><b>Resposta:</b></strong> An anonymous function is a function that doesn't have any associated name. Normally, we use the "function" keyword before the function name to define a function in JavaScript. However, in anonymous functions in JavaScript, we use only the "function" keyword without the function name.

An anonymous function is not accessible after its initial creation; it can only be accessed through a variable in which it's stored as a function value. An anonymous function can also have multiple arguments, but only one expression.

<!-- function() {
    // Function Body
} -->

:blue_book: <strong><b>22)</b></strong> What do you know about the CSS image sprites and why it is utilized?
:blue_book: <strong><b>Resposta:</b></strong> CSS image sprites involve combining multiple images into a single image. This reduces the number of HTTP requests made by the browser when loading a webpage, leading to improved performance. CSS is then used to display only specific parts of the sprite as background images for different elements.

:blue_book: <strong><b>23)</b></strong> Suggest some ways on how to fix the browser-specific styling issue?
:blue_book: <strong><b>Resposta:</b></strong> Browser-specific styling issues can be fixed using techniques like:

Using CSS vendor prefixes
Feature detection with JavaScript
Providing alternative styling for specific browsers
Using CSS resets or normalize.css
Embracing CSS frameworks that handle cross-browser compatibility.

:blue_book: <strong><b>24)</b></strong> Mention the pitfalls for using a CSS Preprocessor like Sass?
:blue_book: <strong><b>Resposta:</b></strong> Pitfalls of using a CSS preprocessor like Sass can include a steeper learning curve, the necessity to compile code before deploying, potential for generating excessive code, and the temptation to overcomplicate stylesheets. 

:blue_book: <strong><b>25)</b></strong> Suggest how can we optimize our front-end page.
:blue_book: <strong><b>Resposta:</b></strong> 
Optimizing a front-end page involves techniques like:

Minimizing and compressing assets (HTML, CSS, JS)
Using content delivery networks (CDNs)
Leveraging browser caching
Implementing responsive design for different devices
Reducing HTTP requests and file sizes
Using efficient image formats (WebP)
Employing lazy loading for images.

:blue_book: <strong><b>26)</b></strong> What is the difference between attribute and property?
:blue_book: <strong><b>Resposta:</b></strong> In HTML, attributes are defined in the markup and provide initial values. Properties are part of the DOM (Document Object Model) and represent the current state of elements. Attributes are typically static, while properties are dynamic and can change due to user interactions or script modifications.

:blue_book: <strong><b>27)</b></strong> State the difference between == and ===?
:blue_book: <strong><b>Resposta:</b></strong> 
== is a loose equality operator that compares values after performing type conversion. 
=== is a strict equality operator that compares values without type conversion, ensuring both value and type match.

:blue_book: <strong><b>28)</b></strong> Why do we utilize the “use strict”; statement?
:blue_book: <strong><b>Resposta:</b></strong> The "use strict"; statement is used in JavaScript to enable strict mode, which helps catch common coding mistakes and "unsafe" actions. It prevents the use of undeclared variables, disallows certain syntax, and promotes more secure and efficient coding practices.

:blue_book: <strong><b>29)</b></strong> Name the major HTTP requests
:blue_book: <strong><b>Resposta:</b></strong> 
The major HTTP requests are:

GET: Retrieves data from the server.
POST: Sends data to the server to create a resource.
PUT: Updates an existing resource on the server.
DELETE: Deletes a resource on the server.
PATCH: Partially updates a resource.

:blue_book: <strong><b>30)</b></strong> What is Py-Script?
:blue_book: <strong><b>Resposta:</b></strong> PyScript is a framework that allows the development of sophisticated Python applications in the browser. This is achieved through a combination of Python and standard HTML.

:blue_book: <strong><b>31)</b></strong> Why should we hire you as frontend developer?
:blue_book: <strong><b>Resposta:</b></strong> I've always had a lot of contact with customer service, understanding their demands and defining the steps I needed to take to meet expectations, from the beginning of development to deployment. This has provided me with extensive experience to retain and attract more clients. Over the years, I've discovered an ability to learn any technology or integration needed within a system, enabling me to deliver for major clients and enhance the company's credibility. I have a strong passion for teamwork, and learning and sharing knowledge are among my core values. For these and more reasons, I believe I am the right person for this opportunity.

:blue_book: <strong><b>32)</b></strong> What is the most challenging work you have ever done as a front-end developer?
:blue_book: <strong><b>Resposta:</b></strong> I've had the opportunity to work on various projects in different fields, including front-end and back-end development, artificial intelligence, data science, and more. Among these projects, I believe the most challenging one I've had was the first proposal I received to work as a developer. At that time, I had only been studying programming on my own for two months and didn't have much support. I was given a challenge to take over a back-end project that was generating a few charts using Python and libraries like Pandas, NumPy, and Flopy. The task was to transform this advanced data analysis into a website that could generate charts based on the input provided by a Civil Engineer.

This project was the most challenging because, at the time, I was still very much a beginner, and I had to study extensively to achieve the expected result. After three months of dedicated work, I successfully completed the project and delivered a fully functional and styled system.

:blue_book: <strong><b>33)</b></strong> What is front end and back end web development?
:blue_book: <strong><b>Resposta:</b></strong> Front-end web development involves creating the user interface and user experience of a website. It deals with HTML, CSS, JavaScript, and how users interact with the site. Back-end web development involves server-side programming, databases, and server configuration to manage data and deliver content to users.

:blue_book: <strong><b>34)</b></strong> Which language is best for front end development?
:blue_book: <strong><b>Resposta:</b></strong> I believe there is no "best language" for front-end development. Each language is suitable for different scenarios and preferences. However, in my opinion, if I were to choose a language, it would be JavaScript, which provides us with numerous possibilities when developing a system.

:blue_book: <strong><b>35)</b></strong> What is SSR(Server Side Rendering)?
:blue_book: <strong><b>Resposta:</b></strong> Server Side Rendering is a technique where web pages are initially generated on the server and then sent to the browser as fully-rendered HTML. This can improve initial page load performance and SEO, as search engines can index the content. Frameworks like Next.js (for React) and Nuxt.js (for Vue.js) facilitate SSR.

:blue_book: <strong><b>36)</b></strong> What' is bootstrap?
:blue_book: <strong><b>Resposta:</b></strong> Bootstrap is a popular open-source front-end framework that provides a collection of pre-designed HTML, CSS, and JavaScript components. It simplifies and accelerates web development by offering responsive design, grid systems, UI components, and more, helping developers create consistent and mobile-friendly websites.

:blue_book: <strong><b>37)</b></strong> What is flexbox?
:blue_book: <strong><b>Resposta:</b></strong> Flexbox (short for Flexible Box Layout) is a CSS layout model designed to make the alignment and distribution of elements within a container more efficient and predictable. It provides an alternative to traditional layout methods using floats and positioning, making it easier to create flexible and responsive designs.
