<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Entry Page</title>
    <link rel="stylesheet" href="stle.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
</head>
<body>
<header>
    <h1>myBlog</h1>
    <h2>because the internet needs to know what I think</h2>
    <nav>
        <ul>
            <li><a id="aa" href="blog.php?category=Work&category=University&category=Family">All Blog Items</a></li>
            <li><a id="bb" href="blog.php?category=Work">Work Blog Items</a></li>
            <li><a id="cc" href="blog.php?category=University">University Blog Items</a></li>
            <li><a id="dd" href="blog.php?category=Family">Family Blog Items</a></li>
            <li><a id="ee" href="add.php">Insert Blog Item</a></li>
        </ul>
    </nav>
</header>
<main>

    <?
    include(connection.php);
    if ($_SERVER['REQUEST_METHOD']==='GET'){
      echo"<form action="add.php" method="post">
        <fieldset>
            <tr>
                <td><label>Entry Tiltle:</label></td>
                <td><input type="text" name="Title" placeholder="Enter Title"></td>
            </tr><br>

            <tr>
                <td><label>Entry Summary:</label></td>
                <td><textarea name="Entry Summary" cols="20" rows="5"></textarea></td>
            </tr><br>

            <tr>
                <td><label>Category:</label></td>
                <td><select>
                        <option value="Select a category">Select a category</option>
                        <option value="Work">Work</option>
                        <option value="University">University</option>
                        <option value="Work">Family</option>
                    </select></td>
            </tr><br>

            <tr>
                <td><label>Submitted By:</label></td>
                <td><input type="text" name="Submitted By" placeholder="Submitted By"></td><br>
            </tr>

            <tr><input type="submit" name="submit" value="Submit"></tr>
        </fieldset>
    </form>";
    }
        elseif ($_SERVER['REQUEST_METHOD']==='POST'){
            $entryTitle = $_POST["entryTitle"];
            $entrySummary = $_POST["entrySummary"];
            $category = $_POST["category"];
            $submitter = $_POST["submitter"];
            $sql = "INSERT INTO blogview(entryTitle,entrySummary,Category,submitter)"
            VALUES('$entryTitle', '$entrySummary','$category','$submitter');
            if (mysqli_query($db,$sql)){

            }elseif{
                echo "Erro:".$sql."<br>".mysqli_error($db);
            }

    }header("location:blog.php");
    else(
    header("location:index.php");
    )
    ?>
</main>
<footer>
    <p>Designed by [Emmanuel Onumah],[2016].</p>
</footer>
</body>
</html>