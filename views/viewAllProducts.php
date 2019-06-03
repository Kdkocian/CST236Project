<?php
class displayAllProducts
{
public function _construct($products)
    {
            if(count((array)$products) > 0)
                {
                        echo '<link rel="stylesheet" type="text/css" href="style.css">';
                        echo "<table>";
                        echo "<tr><td>ID</td><td>First Name</td><td>Last Name</td></tr>";
                        for ($x = 0; $x < count((array)$products); $x++)
                        {
                            echo "<tr>";
                            echo "<td>" . $products[$x][0] . "</td>" .
                                "<td>" . $products[$x][1] . "</td>" .
                                "<td>" . $products[$x][2] . "</td>" ;
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else
                    {
                        echo "No results were found";
                }
        }
}

?>