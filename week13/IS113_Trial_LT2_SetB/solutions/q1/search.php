<html>
    <head>
        <title>Student Search</title>
        <link rel="stylesheet" type="text/css" href="student-list.css"/>
    </head>
    <body>
        <div class="centralbox">
            <h2>Find Students with the Following Criteria:</h2>
            <form method="post" action="process_search.php">
                <table>
                    <tr>
                        <td style="text-align:right">School: </td>
                        <td>
                            <select name="school">
                                <option value="SIS">SIS</option>
                                <option value="LKCSB">LKCSB</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right"> Min. Num. of Courses Taken: </td>
                        <td>
                            <input type="text" name="min_course_count" size="2" required/>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right"> Sort Matching Students by: </td>
                        <td>
                            <select name="sort_by">
                                <option value="id">ID</option>
                                <option value="name">Name</option>
                            </select>
                        </td> 
                    </tr>
                </table>
                <br/>
                <input type="submit"/>
            </form>
        </div>
    </body>
</html>