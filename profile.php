<html>
    <?php include "header.php"; ?>

    <body>
        <br>
        <div class="container">
            <?php
                $edit = "<a href=\"settings.php\"><div class=\"edit\"><span class=\"glyphicon glyphicon-pencil\"></span> edit</div></a>";

                if(!empty($_GET['id']))
                    $user = getUser($_GET['id']);
                else {
                    if(isSignedIn()) {
                        $user = getUser($_SESSION['id']);
                    } else {
                        echo "Invalid parameters. Redirecting to index...<script>window.location.replace(\"index/\");</script>";
                    }
                }
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <center>
                        <img src="assets/user-icons/default.png">
                        <h1><a href="profile/?id=<?php echo $user['id']; ?>"><?php echo htmlspecialchars($user['username']); ?></a></h1>
                        <h2><?php echo htmlspecialchars(NAME) . " " . $user['rank_html'] ?></h2>
                        <h2 class="lang"><?php
                            $print = isSignedIn() && ($_SESSION['rank'] != 0 || ($user['id'] == $_SESSION['id']));

                            $language = $user['languages'];
                            if(empty($language) || $language == "None") {
                                echo "Language Unspecified";
                            } else {
                                echo htmlspecialchars($language) . " Developer";
                            }

                            echo "</h2>" . ($print ? $edit : '');
                        ?>
                    </center>
                </div>
                <div class="col-sm-9">
                    <center>
                        <h2>Description</h2>
                        <div class="aboutme">
                            <?php
                                echo "<h3>" . htmlspecialchars($user['description']) . "</h3>";
                                if($print)
                                    echo $edit;
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </body>
</html>
