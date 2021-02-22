<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Тестовое задание</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

		<p> <u>Junior</u> | <u>Middle</u> | <u>Senior</u> </p>
		<h1>Тестовое задание для Junior веб-разработчика</h1>

		<p>
			Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта. Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736"> https://voronezh.hh.ru/employer/1132736</a>
		</p>
        
    <div class="outer_container">
		<p class="left_p">
			Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс. 
		</p>
		
		<p class="right_p">
			У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)
		</p>
    </div>  

    <div class="outer_container">  
        <img src="BX-logo.png">
		<p class="down_p">Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.</p>
    </div>
        
        <p id="php_result">        
        <?php
        
            include 'ArrayWorker.php';
        
            $A = new ArrayWorker();
            $A->dump();
        
        ?>
        </p>
        
		<hr>
		<p id="credits">
			© 2009-2019 IT-Buro
		</p>
		
        <script src="script.js"></script>
    </body>
</html>