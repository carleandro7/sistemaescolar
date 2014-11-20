<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" >G-EDUCAR v0.1</a>
            </div>
               <ul class="nav navbar-top-links navbar-right">
                                <!-- /.dropdown -->
                               <?php echo $this->Session->read('Auth.User.email'); ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajuda</a>
                        </li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout', 'class'=>'fa fa-sign-out fa-fw')); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>                          
                            <a class="active" href="<?php echo $this->Html->url(array('controller' => 'Schools', 'action' => 'index')); ?>"><i class="fa fa-dashboard fa-fw"></i> Institutos</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Turma<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Groups', 'action' => 'index')); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link(__('Disciplinas'), array('controller' => 'DisciplineGroups', 'action' => 'index')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Cursos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Courses', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Disciplinas'), array('controller' => 'Disciplines', 'action' => 'index')); ?>
                                </li>
                                 <li>
                                    <?php echo $this->Html->link(__('Professores'), array('controller' => 'Teachers', 'action' => 'index')); ?>
                                </li>
                             </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Alunos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Students', 'action' => 'index')); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link(__('Matricular Aluno em Turma'), array('controller' => 'GroupStudents', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Matricular Aluno em Disciplina'), array('controller' => 'DisciplineStudents', 'action' => 'index')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Financeiro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Gerar Boleto</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Etc...</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Relatório<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Pagamentos do Mês</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Etc...</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Usuários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Users', 'action' => 'index')); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link(__('Adicionar'), array('controller' => 'Users', 'action' => 'indexadd')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>