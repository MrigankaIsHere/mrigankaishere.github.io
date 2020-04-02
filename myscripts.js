function displayML()
{
	var d=document.getElementById('descML')
	d.innerHTML="<p style=\"margin:20px; font-family: Courier; color: white; \"><br>In this introductory course to machine learning, I learnt a few basic machine learning algorithms alongwith the mathematics that comes entangled with it. The course involved working with assignments in a group. We as a group worked our assignments in Python 3. The most notable work here was to build a deCAPTCHA for a fairly simple CAPTCHA scheme.</p><p style=\"margin:20px;color: white;\">I completed this course with a Performance Index of 8 out of 10.</p>"
	d.style.borderColor="blue"
	d.style.display="block"
}
function displayPC()
{
	
	var d=document.getElementById('descPC')
	d.innerHTML=d.innerHTML="<p style=\"margin:20px; font-family: Courier; color:white \">In this course, I learnt about efficient communication algorithms that sustain a large parallel network. The most notable work in this course was to write a parallel code to identify the  number of clusters in a huge real life data set of N body simulation. I also studied the high level architecture of the IBM BlueGene and IIT Kanpurs HPC2013 supercomputer. The course involved assignments that had to be done individually. Assignments had to be done in C language with extensive support from the MPICH library.<br><br>I completed this course with a Performance Index of 8 out of 10.</p>"
	d.style.borderColor="red"
	d.style.display="block"
}
function displaySS()
{
	var d=document.getElementById('descSS')
	d.innerHTML="<p style=\"margin:20px; font-family: Courier;\">In this course I learnt about various attacks on a system, and there defenses. I surfaced web-security, network security as well. I also learnt about privilage escalations, and how we can minimize its effects by running code in isolation. This course involved a CTF challenge, where in we had to analyse the binary of a file, and break it to read secret hashes stored in a protected file. The most notable work in this course was to design a DropBox like application to store files securely, which was written in Golang.<br><br> I completed the course with a performance index of 10 out of 10.</p>"
	d.style.borderColor="yellow"
	d.style.display="block"
}
function displayVSS()
{
	var d=document.getElementById('descVSS')
	d.innerHTML="<p style=\"margin:20px; font-family: Courier; color: white; \">Currently studying in this semester.</p>"
	d.style.borderColor="blue"
	d.style.display="block"
}
function displayMC()
{
	var d=document.getElementById('descMC')
	d.innerHTML="<p style=\"margin:20px; font-family: Courier; color: white; \">Currently studying in this semester.</p>"
	d.style.borderColor="green"
	d.style.display="block"
}
function displayMA()
{
	var d=document.getElementById('descMA')
	d.innerHTML="<p style=\"margin:20px; font-family: Courier; color: white; \">Currently studying in this semester.</P"
	d.style.borderColor="red"
	d.style.display="block"
}
function resetML()
{
	var d=document.getElementById('descML')
	d.style.display="none"
}
function resetPC()
{
	var d=document.getElementById('descPC')
	d.style.display="none"
}
function resetSS()
{
	var d=document.getElementById('descSS')
	d.style.display="none"
}
function resetVSS()
{
	var d=document.getElementById('descVSS')
	d.style.display="none"
}
function resetMC()
{
	var d=document.getElementById('descMC')
	d.style.display="none"
}
function resetMA()
{
	var d=document.getElementById('descMA')
	d.style.display="none"
}
