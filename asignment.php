<?php
error_reporting(0);

title = "MCQ ";title="MCQ";address = "file1.php";
$randomizequestions ="no";

$a = array(
1 => array(
0 => "Select the odd one",
1 => "Pegion",
2 => "Crow",
3 => "Tiger",
4 => "Parrot",
6 => 3
),
2 => array(
0 => "Select the number divisible by 3",
1 => "25",
2 => "69",
3 => "26",
4 => "86",
6 => 2
),
3 => array(
0 => "Who is President of India",
1 => "Sh. Narendra Modi",
2 => "Sh. Ramnath Kovind",
3 => "Sh. Rajnath Singh",
4 => "Smt. Sonia Gandhi",
6 => 2
),
4 => array(
0 => "Which Country is not negibour of India",
1 => "Pakistan",
2 => "China",
3 => "Nepal",
4 => "Russia",
6 => 4
),
5 => array(
0 => "What is the capital of India",
1 => "Mumbai",
2 => "Kolkata",
3 => "New Delhi",
4 => "Chnadighar",
6 => 3
),
);

$max=5;

question=question=_POST["question"] ;

if (_POST["Randon"]==0){ if(randomizequestions =="yes"){randval = mt_rand(1,randval=mt 
r
​	
 and(1,max);}else{randval=1;}randval2 = randval; }else{randval=_POST["Randon"]; 
P
​	
 OST["Randon"];randval2=_POST["Randon"] + 
P
​	
 OST["Randon"]+question;
if (randval2>randval2>max){
randval2=randval2=randval2-$max;
}
}

ok=ok=_POST["ok"] ;

if (question==0){question=0;
ok=0;ok=0;percentage=0;
}else{
percentage= Round(100*percentage=Round(100∗ok / $question);
}
?>

<HTML><HEAD><TITLE>Multiple Choice Questions: <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE=’JavaScript’>
<!–
function Goahead (number){
if (document.percentage.response.value0){
if (number<?php print a[a[randval2][6] ; ?>){
document.percentage.response.value=1
document.percentage.question.value++
document.percentage.ok.value++
}else{
document.percentage.response.value=1
document.percentage.question.value++
}
}
if (number==<?php print a[a[randval2][6] ; ?>){
document.question.response.value="Correct"
}else{
document.question.response.value="Incorrect"
}
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if (question<question<max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">

<BR>Percentage of correct responses: <?php print percentage; ?> % <BR><input type=submit value="Next >>"> <input type=hidden name=response value=0> <input type=hidden name=question value=<?php printpercentage;?>question; ?>>
<input type=hidden name=ok value=<?php print ok; ?>> <input type=hidden name=Randon value=<?php printok;?>><inputtype=hiddenname=Randonvalue=<?phpprintrandval; ?>>
<br><?php print question+1; ?> / <?php printquestion+1;?>/<?phpprintmax; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".a[a[randval2][0]."</b>"; ?>

<BR> <INPUT TYPE=radio NAME="option" VALUE="1" onClick=" Goahead (1);"><?php print a[a[randval2][1] ; ?>
<BR> <INPUT TYPE=radio NAME="option" VALUE="2" onClick=" Goahead (2);"><?php print a[a[randval2][2] ; ?>
<?php if (a[a[randval2][3]!=""){ ?>
<BR> <INPUT TYPE=radio NAME="option" VALUE="3" onClick=" Goahead (3);"><?php print a[a[randval2][3] ; } ?>
<?php if (a[a[randval2][4]!=""){ ?>
<BR> <INPUT TYPE=radio NAME="option" VALUE="4" onClick=" Goahead (4);"><?php print a[a[randval2][4] ; } ?>
<?php if (a[a[randval2][5]!=""){ ?>
<BR> <INPUT TYPE=radio NAME="option" VALUE="5" onClick=" Goahead (5);"><?php print a[a[randval2][5] ; } ?>
<BR> <input type=text name=response size=8>

</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentage of correct responses: <?php print percentage ; ?> % <p><A HREF="<?php printpercentage;?>address; ?>">Enter Name</a>

<?php } ?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
