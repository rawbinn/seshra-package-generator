<?php

namespace Seshra\PackageGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Seshra\PackageGenerator\Console\Command\PackageMakeCommand;
use Seshra\PackageGenerator\Console\Command\ProviderMakeCommand;
use Seshra\PackageGenerator\Console\Command\ModuleProviderMakeCommand;
use Seshra\PackageGenerator\Console\Command\AdminControllerMakeCommand;
use Seshra\PackageGenerator\Console\Command\AdminRouteMakeCommand;
use Seshra\PackageGenerator\Console\Command\MigrationMakeCommand;
use Seshra\PackageGenerator\Console\Command\ModelMakeCommand;
use Seshra\PackageGenerator\Console\Command\ModelProxyMakeCommand;
use Seshra\PackageGenerator\Console\Command\ModelContractMakeCommand;
use Seshra\PackageGenerator\Console\Command\RepositoryMakeCommand;
use Seshra\PackageGenerator\Console\Command\SeederMakeCommand;
use Seshra\PackageGenerator\Console\Command\MailMakeCommand;
use Seshra\PackageGenerator\Console\Command\CommandMakeCommand;
use Seshra\PackageGenerator\Console\Command\EventMakeCommand;
use Seshra\PackageGenerator\Console\Command\ListenerMakeCommand;
use Seshra\PackageGenerator\Console\Command\MiddlewareMakeCommand;
use Seshra\PackageGenerator\Console\Command\RequestMakeCommand;
use Seshra\PackageGenerator\Console\Command\NotificationMakeCommand;

class PackageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageMakeCommand::class,
                ProviderMakeCommand::class,
                ModuleProviderMakeCommand::class,
                AdminControllerMakeCommand::class,
                AdminRouteMakeCommand::class,
                MigrationMakeCommand::class,
                ModelMakeCommand::class,
                ModelProxyMakeCommand::class,
                ModelContractMakeCommand::class,
                RepositoryMakeCommand::class,
                SeederMakeCommand::class,
                MailMakeCommand::class,
                CommandMakeCommand::class,
                EventMakeCommand::class,
                ListenerMakeCommand::class,
                MiddlewareMakeCommand::class,
                RequestMakeCommand::class,
                NotificationMakeCommand::class
            ]);
        }
    }
}