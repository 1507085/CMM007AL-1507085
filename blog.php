<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing</title>
    <link rel="stylesheet" href="stle.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
</head>
<body>
<header>
    <h1>myBlog</h1>
    <h2>because the internet needs to know what I think</h2>
    <nav>
        <ul>
            <li><a id="aa" href="blog.html">All Blog Items</a></li>
            <li><a id="bb" href="blog.html">Work Blog Items</a></li>
            <li><a id="cc" href="blog.html">University Blog Items</a></li>
            <li><a id="dd" href="blog.html">Family Blog Items</a></li>
            <li><a id="ee" href="add.html">Insert Blog Item</a></li>
        </ul>
    </nav>
</header>
<main>
    <?
    include("connection.php");
    $sql_query="SELECT* FROM blogview";
    $result =$db->query($sql_query);
    while($row= $db->query($sql_query)){
        $entryTitle = $row['entryTitle'];
        $entrySummary = $row['entrySummary'];
        $category = $row['category'];
        $submitter = $row['submitter'];
        $blogitemID = $row['blogitemID'];
        echo"<option value='{$blogitemID}'>{$entryTitle}{$entrySummary}{$category}{$submitter}</option>";
    }
    ?>
</main>
<footer>
    <p>Designed by [Emmanuel Onumah],[2016].</p>
</footer>
</body>
</html>
