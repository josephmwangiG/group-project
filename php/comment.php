<?php
    include_once "header.php";
?>
<head>
    <link rel="stylesheet" href="../css/comment.css">
</head>
<body>
    <div id="comment">
        <div id="comment_form">
            <textarea name="comment_text" id="comment_text" placeholder="Comment Message" cols="30" rows="10"></textarea>
            <button>Comment</button>
        </div>
        <div id="comments_body">
            <?php
                for ($i=10;$i<200;$i++){
                    echo $i,'My comments are here see them <br>';
                }
            
            ?>

        </div>
    </div>

    <div id="footer">
        <div id="contacts">
            <span id="contacts_title">CONTACTS</span>
            <p>
                email: fkbase@gmail.com <br>
                phone: +254 708564750

            </p>
        </div>
        <div id="about">
            <span id="about_title">ABOUT</span>
            <p>
                The farmers knowledge base is a project to help farmers acquire the needed knowledge to manage their farms

            </p>
            
        </div>
        <div id="help">
            <span id="help_title">HELP</span>
            <p>
                If you need any help you can contact us through our contacts or comment page.

            </p>
            
        </div>

    </div>
</body>