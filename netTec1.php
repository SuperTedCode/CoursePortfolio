<?php
$page_title = 'System and Network Technologies';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>System and Network Technologies</h1>
    <h2>Semester one</h2>
    <p>For this module we went through some lectures on the operating system and looked at the comparison of some of the best know to date. We also looked into virtualization by VMware and with our student accounts on Microsoft's <b>Azure</b> we built some virtual machines on windows and Unix operating systems. We also looked at the windows command line where we creating some batch files and with scheduled jobs we would send system information via email.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
    <div class="thumbnail">
      <h4 class="title">Virtual Machine Setup Assignment</h4>
      <div class="caption">
        <p>For this assignment I had to setup a Ubuntu server using VMware and also a windows web server on Azure. For the windows web server, a website which I created was hosted on the server and accessed externally through its public IP address. Once both servers were created I then had to setup some scheduled jobs to run a batch file on both the Linux and windows VMs that would send an email containing some system information. All the steps had to be put together into a guide manual. Please have a look at the two manuals below.</p>
        <ul>
          <li><a class="pdf" href="/Git-Repository-Proj/labSem1/UbuntuServersetupguide.pdf" target="_blank">Ubuntu Server Manual pdf</a></li>
          <li><a class="pdf" href="/Git-Repository-Proj/labSem1/WindowsServerversion.pdf" target="_blank">Windows Server Manual pdf</a></li>
        </ul>
      </div>
    </div>
    </div>
</div>
</div>

<?php
include ('includes/footer.html');
?>