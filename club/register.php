<?php include "header.php";?>
	<div class="reg_a">
		<div class="ha">Register</div>
		<hr>
		<form id="registration" method="post" onsubmit="return validate(this);" action="data.php">
			<label for="fname">First Name<span>*</span>:</label><input type="text" id="fname" name="firstName"/>
			<br><br>
			<label for="midname">Middle Name:</label><input type="text" id="midname" name="middleName"/>
			<br><br>
			<label for="lname">Last Name<span>*</span>:</label><input type="text" id="lname" name="lastName"/>
			<br><br>
			<label for="ugYr"><?php echo $college?>&nbsp;- Class of<span>*</span>:</label><input type="text" id="ugYr" name="ugYear"/>
			<br><br><br><br>

			<input type="checkbox" class="cbox" name="pg" onclick="sh_b(this, 'pgsec')"/>Post-Graduate<br><br>

			<label for="pg_uname">University<span>*</span>:</label><input type="text" id="pg_uname" class="pgsec" name="pgUnivName" disabled/>
			<br><br>
			<label for="pg_yr">Class of<span>*</span>:</label><input type="text" id="pg_yr" class="pgsec" name="pgYear" disabled/>
			<br><br><br><br>

			<input type="checkbox" class="cbox" name="doc" onclick="sh_b(this, 'drsec')" />Doctorate<br><br>

			<label for="dr_uname">University<span>*</span>:</label><input type="text" id="dr_uname" class="drsec" name="docUniv" disabled/>
			<br><br>
			<label for="dr_yr">Class of<span>*</span>:</label><input type="text" id="dr_yr" class="drsec" name="docYear" disabled/>
			<br><br><br><br>
			<label for="contact_a">Email<span>*</span>:</label><input type="email" id="contact_a" name="mailAdd"/>
			<br><br>
			<label for="contact_b">Mobile/Landline:</label><input type="text" id="contact_b" name="contactNo"/>
			<br><br>
			<label for="firstPass">Password<span>*</span>:</label><input type="password" id="firstPass" name="password"/>
			<br><br>
			<label for="secondPass">Retype Password<span>*</span>:</label><input type="password" id="secondPass" name="passwordChecker"/>
			<br><br>
			<input type="submit" value="Join!" style="position:absolute; right: 0px; font-size: 15px;"/>
		</form>
	</div>
	<script>
		function sh_b(element, clsname) {
			var inputs = document.getElementsByClassName(clsname);
			if (element.checked)
			{
				for (var i = 0; i <= inputs.length; i++)
				{
					inputs[i].disabled = false;
				}
			}
			else {
				for (var i = 0; i <= inputs.length; i++)
				{
					inputs[i].disabled = true;
				}
			}
		}

		function purgePasswords() {
			document.getElementById("firstPass").value = "";
			document.getElementById("secondPass").value = "";
			document.getElementById("firstPass").focus();
		}
		function validate(f) {
			if (fname.value=="")
			{
				alert("Provide first name");
				return false;
			}
			else if (document.forms.registration.lname.value=="")
			{
				alert("Provide last name");
				return false;
			}
			else if (document.forms.registration.ugYr.value=="")
			{
				alert("Provide your"+" <?php echo $college2?> "+"passout year");
				return false;
			}
			else if (document.forms.registration.contact_a.value=="")
			{
				alert("Provide your e-mail address");
				return false;
			}
			else if (document.forms.registration.firstPass.value=="")
			{
				alert("Provide a password");
				return false;
			}
			else if (document.forms.registration.secondPass.value=="")
			{
				alert("Provide the password retyped");
				return false;
			}
			if (document.forms.registration.pg.checked)
			{
				 if (!(document.getElementById("pg_yr").value == "") && (document.getElementById("pg_uname").value == ""))
				 {
					alert("Provide the PG University/College name");
					return false;
				 }
				 else if ((document.getElementById("pg_yr").value == "") && !(document.getElementById("pg_uname").value == ""))
				 {
					alert("Provide the PG Class year");
					return false;
				 }
				 else if ((document.getElementById("pg_yr").value == "") && (document.getElementById("pg_uname").value == ""))
				 {
					alert("Provide the PG details");
					return false;
				 }
			}
			if (document.forms.registration.doc.checked)
			{
				 if (!(document.getElementById("dr_uname").value == "") && (document.getElementById("dr_yr").value == ""))
				 {
					alert("Provide the Doctorate Class Year");
					return false;
				 }
				 else if ((document.getElementById("dr_uname").value == "") && !(document.getElementById("dr_yr").value == ""))
				 {
					alert("Provide the PG Doctorate University/College Name");
					return false;
				 }
				 else if ((document.getElementById("dr_uname").value == "") && (document.getElementById("dr_yr").value == ""))
				 {
					alert("Provide the Doctorate details");
					return false;
				 }
			}
			if ((document.forms.registration.firstPass.value != document.forms.registration.secondPass.value))
			{
				purgePasswords();
				alert("There is a password mismatch.\n\nProvide same passwords");
				return false;
			}
		}
	</script>
<?php include "footer.php";?>
