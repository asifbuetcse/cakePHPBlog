<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#">CakePHP Blog</a>
    	</div>
    	<ul class="nav navbar-nav">
	      	<li><?php echo $this->Html->link('All Users', array('controller' => 'users', 'action' => 'index')); ?></li>
	    </ul>
	    <ul class="nav navbar-nav" style="float: right">
	    	<li class="active"><?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'add')); ?></li>
	      	<li><?php echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login')); ?></li>
	    </ul>
  	</div>
</nav>