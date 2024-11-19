<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* MigrationSample/DoctrineMigrations/Version20181101012712.php */
class __TwigTemplate_2cbfa4b40cc1cb222ce4dc5600d54d5cc27cd70f468c932b1c93d09c07c0b247 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/DoctrineMigrations/Version20181101012712.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/DoctrineMigrations/Version20181101012712.php"));

        // line 1
        echo "<?php

namespace Plugin\\MigrationSample\\DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181101012712 extends AbstractMigration
{
    public function up(Schema \$schema) : void
    {
        \$Table = \$schema->getTable('dtb_base_info');
        if (\$Table->hasColumn('migration_sample')) {
            \$this->addSql('UPDATE dtb_base_info SET migration_sample = ? WHERE id = 1', ['up']);
            dump('up');
        }
    }

    public function down(Schema \$schema) : void
    {
        \$Table = \$schema->getTable('dtb_base_info');
        if (\$Table->hasColumn('migration_sample')) {
            \$this->addSql('UPDATE dtb_base_info SET migration_sample = ? WHERE id = 1', ['down']);
            dump('down');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MigrationSample/DoctrineMigrations/Version20181101012712.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Plugin\\MigrationSample\\DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181101012712 extends AbstractMigration
{
    public function up(Schema \$schema) : void
    {
        \$Table = \$schema->getTable('dtb_base_info');
        if (\$Table->hasColumn('migration_sample')) {
            \$this->addSql('UPDATE dtb_base_info SET migration_sample = ? WHERE id = 1', ['up']);
            dump('up');
        }
    }

    public function down(Schema \$schema) : void
    {
        \$Table = \$schema->getTable('dtb_base_info');
        if (\$Table->hasColumn('migration_sample')) {
            \$this->addSql('UPDATE dtb_base_info SET migration_sample = ? WHERE id = 1', ['down']);
            dump('down');
        }
    }
}
", "MigrationSample/DoctrineMigrations/Version20181101012712.php", "/var/www/htdocs/ec922501/app/Plugin/MigrationSample/DoctrineMigrations/Version20181101012712.php");
    }
}
