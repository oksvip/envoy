@servers(['app1' => ['root@118.31.60.126'], 'app2' => ['root@106.14.41.75']])

@task('deploy', ['on' => ['app1', 'app2'], 'parallel' => true])

    cd /www/envoy

    git pull origin master

    composer install --no-dev

    php artisan migrate --force

@endtask
