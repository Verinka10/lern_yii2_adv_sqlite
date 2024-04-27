<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 test</h1>
    <br>
</p>
<h2>Install</h2>
<h4>Installing using Docker</h4>
<pre>
docker-compose up --build -d
docker-compose exec backend composer install
docker-compose exec backend init --env=Development --overwrite=n
docker-compose exec backend yii migrate
open http://localhost:21080
</pre>

<h4>Structure</h4>
<pre>
    /backend/modules/photobank - src
    /console/migrations - migrations (init, photobank)
</pre>




[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)


