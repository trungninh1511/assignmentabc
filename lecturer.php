<?php

echo '
<form action="/lecturerAction" method="post">
Id: <input type="text" name="id" id="id"><br/>
FirstName: <input type="text" firstname="id" id="firstname"><br/>
LastName: <input type="text" lastname="id" id="lastname"><br/>
Male<input type="radio" name="sex" value="M" /> Male <br />
Female<input type="radio" name="sex" value="F" /> Female

<input type="submit" value="Save">
</form>
';

?>