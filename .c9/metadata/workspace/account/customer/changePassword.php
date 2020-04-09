{"filter":false,"title":"changePassword.php","tooltip":"/account/customer/changePassword.php","undoManager":{"mark":24,"position":24,"stack":[[{"start":{"row":167,"column":23},"end":{"row":217,"column":26},"action":"remove","lines":[" <form action=\"\" method=\"post\">","                            <p>","                                <label for=\"email\">Email:</label>","                                <input type=\"email\" name=\"email\" id=\"email\" value=\"<?php echo $email;?>\" readonly=true><br><small>You cannot change your email address.</small>","                            </p>","                            <p>","                                <label for=\"current_password\">Current Password</label>","                                <input type=\"password\" name=\"current_password\" id=\"current_password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","                                <br>","                                <?php echo $password_message;?>","                            </p>","                            <p>","    ","                                <label for=\"new_password\">Enter new password</label>","                                <input type=\"password\" name=\"new_password\" id=\"new_password\" onkeyup='check();' pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","                            </p>","                            <p>","    ","                                <label for=\"confirm_password\">Confirm password</label>","                                <input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" onkeyup='check();' pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","                                    <span id='message'></span>","    ","                                ","                            </p>","                            <p>","                            <p>","                                <input type=\"text\" name=\"password_verify\" id=\"password_verify\" hidden=\"true\">","    ","                                    ","                            <!-- &nbsp;","                            <input type=\"text\" name=\"login\" id=\"login\" readonly=\"true\"/><font color=\"red\"><sup> (required)</sup></font> -->","                            </p>","                            ","                                <input type=\"submit\" value=\"Submit\">","                            </p>","                        </form>","                        <?php // @ref: \"Golden Years\" - 3rd Year Team Project (Semester 1 2017/2018) - By: Darel, A.; Bankole, J.; Feeney, K.; Moore, C.; National College of Ireland","                        if(!isset($bFieldRequired)){","                            echo (\"\");","                        }","                        else if(isset($bFieldRequired) && $bFieldRequired){","                            echo (\"<font color='red'>Required fields not completed</font>\");","                        }","                        else if (isset($successDB) && !$successDB){","                            echo (\"<font color='red'>Sorry, an error occured. We are aware of this issue and working to fix it. <br><br> Technical information: \".$db->error.\"</font>\");","                            //header( 'Location: ../../error.html' ) ;","                        }","                        else if (isset($successDB) && $successDB){","                            echo (\"<font color='#3eb740'>Thank you. Your password has been changed.</font>\");","                        }","                        ?>"],"id":118},{"start":{"row":167,"column":23},"end":{"row":258,"column":14},"action":"insert","lines":["\t\t\t\t\t\t<form action=\"\" method=\"post\">","                        <table>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<label for=\"email\">Email:</label>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" value=\"<?php echo $email;?>\" readonly='true'><br><small>You cannot change your email address.</small>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","\t\t\t\t\t\t\t\t\t&nbdp;","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<label for=\"current_password\">Current Password</label>","                                </td>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"current_password\" id=\"current_password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","                                </td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","                                <p style='text-align:center;'><?php echo $password_message;?></p>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<label for=\"new_password\">Enter new password</label>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"new_password\" id=\"new_password\" onkeyup='check();' pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","\t\t\t\t\t\t\t\t\t&nbdp;","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<label for=\"confirm_password\">Confirm password</label>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t\t<td>","\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" onkeyup='check();' pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number, one uppercase and one lowercase letter, and at least 6 characters or more\" required><font color=\"red\"><sup>*</sup></font> <!-- type is 'text' for testing only -->","                                    <span id='message'></span>","    ","\t\t\t\t\t\t\t\t<input type=\"text\" name=\"password_verify\" id=\"password_verify\" hidden=\"true\">","\t\t\t","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","\t\t\t\t\t\t\t\t\t&nbdp;","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","                                    ","                            <!-- &nbsp;","                            <input type=\"text\" name=\"login\" id=\"login\" readonly=\"true\"/><font color=\"red\"><sup> (required)</sup></font> -->","                            ","                            ","\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\">","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","                        ","\t\t\t\t\t\t</form>","\t\t\t\t\t\t","\t\t\t\t\t\t\t<tr>","\t\t\t\t\t\t\t\t<td colspan='2'>","\t\t\t\t\t\t\t\t","\t\t\t\t\t\t\t\t\t<?php // @ref: \"Golden Years\" - 3rd Year Team Project (Semester 1 2017/2018) - By: Darel, A.; Bankole, J.; Feeney, K.; Moore, C.; National College of Ireland","\t\t\t\t\t\t\t\t\tif(!isset($bFieldRequired)){","\t\t\t\t\t\t\t\t\t\techo (\"\");","\t\t\t\t\t\t\t\t\t}","\t\t\t\t\t\t\t\t\telse if(isset($bFieldRequired) && $bFieldRequired){","\t\t\t\t\t\t\t\t\t\techo (\"<font color='red'>Required fields not completed</font>\");","\t\t\t\t\t\t\t\t\t}","\t\t\t\t\t\t\t\t\telse if (isset($successDB) && !$successDB){","\t\t\t\t\t\t\t\t\t\techo (\"<font color='red'>Sorry, an error occured. We are aware of this issue and working to fix it. <br><br> Technical information: \".$db->error.\"</font>\");","\t\t\t\t\t\t\t\t\t\t//header( 'Location: ../../error.html' ) ;","\t\t\t\t\t\t\t\t\t}","\t\t\t\t\t\t\t\t\telse if (isset($successDB) && $successDB){","\t\t\t\t\t\t\t\t\t\techo (\"<font color='#3eb740'>Thank you. Your password has been changed.</font>\");","\t\t\t\t\t\t\t\t\t}","\t\t\t\t\t\t\t\t\t?>","\t\t\t\t\t\t\t\t</td>","\t\t\t\t\t\t\t</tr>","\t\t\t\t\t\t</table>"]}],[{"start":{"row":179,"column":9},"end":{"row":179,"column":15},"action":"remove","lines":["&nbdp;"],"id":119},{"start":{"row":179,"column":9},"end":{"row":179,"column":15},"action":"insert","lines":["&nbsp;"]},{"start":{"row":205,"column":9},"end":{"row":205,"column":15},"action":"remove","lines":["&nbdp;"]},{"start":{"row":205,"column":9},"end":{"row":205,"column":15},"action":"insert","lines":["&nbsp;"]},{"start":{"row":222,"column":9},"end":{"row":222,"column":15},"action":"remove","lines":["&nbdp;"]},{"start":{"row":222,"column":9},"end":{"row":222,"column":15},"action":"insert","lines":["&nbsp;"]}],[{"start":{"row":232,"column":9},"end":{"row":232,"column":10},"action":"insert","lines":["<"],"id":120},{"start":{"row":232,"column":10},"end":{"row":232,"column":11},"action":"insert","lines":["p"]}],[{"start":{"row":232,"column":11},"end":{"row":232,"column":12},"action":"insert","lines":[" "],"id":121},{"start":{"row":232,"column":12},"end":{"row":232,"column":13},"action":"insert","lines":["s"]},{"start":{"row":232,"column":13},"end":{"row":232,"column":14},"action":"insert","lines":["t"]},{"start":{"row":232,"column":14},"end":{"row":232,"column":15},"action":"insert","lines":["y"]},{"start":{"row":232,"column":15},"end":{"row":232,"column":16},"action":"insert","lines":["l"]},{"start":{"row":232,"column":16},"end":{"row":232,"column":17},"action":"insert","lines":["e"]},{"start":{"row":232,"column":17},"end":{"row":232,"column":18},"action":"insert","lines":["="]}],[{"start":{"row":232,"column":18},"end":{"row":232,"column":19},"action":"insert","lines":["\""],"id":122}],[{"start":{"row":232,"column":18},"end":{"row":232,"column":19},"action":"remove","lines":["\""],"id":123}],[{"start":{"row":232,"column":18},"end":{"row":232,"column":19},"action":"insert","lines":["'"],"id":124}],[{"start":{"row":232,"column":19},"end":{"row":232,"column":20},"action":"insert","lines":["t"],"id":125},{"start":{"row":232,"column":20},"end":{"row":232,"column":21},"action":"insert","lines":["e"]},{"start":{"row":232,"column":21},"end":{"row":232,"column":22},"action":"insert","lines":["x"]},{"start":{"row":232,"column":22},"end":{"row":232,"column":23},"action":"insert","lines":["t"]},{"start":{"row":232,"column":23},"end":{"row":232,"column":24},"action":"insert","lines":["-"]},{"start":{"row":232,"column":24},"end":{"row":232,"column":25},"action":"insert","lines":["a"]},{"start":{"row":232,"column":25},"end":{"row":232,"column":26},"action":"insert","lines":["l"]},{"start":{"row":232,"column":26},"end":{"row":232,"column":27},"action":"insert","lines":["i"]},{"start":{"row":232,"column":27},"end":{"row":232,"column":28},"action":"insert","lines":["g"]},{"start":{"row":232,"column":28},"end":{"row":232,"column":29},"action":"insert","lines":["n"]}],[{"start":{"row":232,"column":29},"end":{"row":232,"column":30},"action":"insert","lines":[":"],"id":126},{"start":{"row":232,"column":30},"end":{"row":232,"column":31},"action":"insert","lines":["c"]},{"start":{"row":232,"column":31},"end":{"row":232,"column":32},"action":"insert","lines":["e"]},{"start":{"row":232,"column":32},"end":{"row":232,"column":33},"action":"insert","lines":["n"]},{"start":{"row":232,"column":33},"end":{"row":232,"column":34},"action":"insert","lines":["t"]},{"start":{"row":232,"column":34},"end":{"row":232,"column":35},"action":"insert","lines":["e"]},{"start":{"row":232,"column":35},"end":{"row":232,"column":36},"action":"insert","lines":["r"]}],[{"start":{"row":232,"column":36},"end":{"row":232,"column":37},"action":"insert","lines":[";"],"id":127},{"start":{"row":232,"column":37},"end":{"row":232,"column":38},"action":"insert","lines":["\""]}],[{"start":{"row":232,"column":37},"end":{"row":232,"column":38},"action":"remove","lines":["\""],"id":128}],[{"start":{"row":232,"column":37},"end":{"row":232,"column":38},"action":"insert","lines":[";"],"id":129}],[{"start":{"row":232,"column":37},"end":{"row":232,"column":38},"action":"remove","lines":[";"],"id":130}],[{"start":{"row":232,"column":37},"end":{"row":232,"column":38},"action":"insert","lines":["'"],"id":131}],[{"start":{"row":232,"column":38},"end":{"row":232,"column":43},"action":"insert","lines":["></p>"],"id":132}],[{"start":{"row":232,"column":39},"end":{"row":232,"column":43},"action":"remove","lines":["</p>"],"id":133}],[{"start":{"row":232,"column":75},"end":{"row":232,"column":79},"action":"insert","lines":["</p>"],"id":134}],[{"start":{"row":167,"column":24},"end":{"row":167,"column":29},"action":"remove","lines":["\t\t\t\t\t"],"id":135}],[{"start":{"row":16,"column":4},"end":{"row":20,"column":117},"action":"insert","lines":["    $query      = \"SELECT * FROM Company WHERE rep_email = '$email'\";","    $result     = $db->query($query);","    ","    $row            = $result->fetch_assoc();","    $password_enc   = $row['password_enc']; // This code gets the current password stored in the database (encrypted)"],"id":136}],[{"start":{"row":20,"column":117},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":137},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"remove","lines":["    "],"id":138}],[{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":139},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":40},"action":"remove","lines":["ompany"],"id":140},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["u"]},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["s"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["t"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["o"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["m"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["e"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["_"],"id":141},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["p"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["e"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["r"]}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "],"id":142},{"start":{"row":18,"column":37},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":18,"column":37},"end":{"row":18,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1531578517161,"hash":"bae2ac0e2916e8761cf8f42451b539c1c061c16a"}