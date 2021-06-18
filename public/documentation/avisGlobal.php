<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3>Overall opinion on the LO07 project</h3>

    Innovative project on a current test. Setting up a Git directory under the GitHub platform with branches
    for the development of features. Mix of programming languages: PHP, HTML, CSS, JS (for innovations),
    which makes the project complete and informative. Up-to-date language that can be used in the professional world.
    Only regret, not to have used a framework or at a pinch micro-framework (for object management for example
    ORM Doctrine).
    After trying the latest version of boostrap (on another project), it might also be interesting to use it, indeed the backward compatibility
    allows you to use all the features currently used and would simplify some things that are not yet available in version 3.<br>
    <h4>Ideas for improvement</h4>
    - see other languages ​​quickly (JS, react, node.js) + communicate with APIs or make
    API (CRUD, REST). Possibility to see the operation of software like Postman. (in order to have more possibilities for
    the project).
    Otherwise, it would be interesting to study client server operation by separating the client and server part at least.
    theoretically. This would perhaps allow a better understanding of the HTTP protocol and approach the development of the project.
    as currently planned.
    It might be interesting to learn about the security aspect with the logins / password of the database which are
    stored in clear in a file.
    <br>
    <h4>Site evolution</h4>
    To develop the site, we could add a patient management module (with a registration system, registration, etc.).
    For appointments we could also add the management of the date and time of the appointment.
    It would be possible to send a reminder to the user / or a confirmation by email that his appointment has been booked.
    It might be interesting to add more graph to better visualize the data, to avoid having simply
    a list in tabular form.
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>