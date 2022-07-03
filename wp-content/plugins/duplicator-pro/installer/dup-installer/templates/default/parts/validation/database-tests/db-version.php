<?php
/**
 *
 * @package templates/default
 *
 */
defined('ABSPATH') || defined('DUPXABSPATH') || exit;

/* Variables */
/* @var $isOk bool */
/* @var $dbVersion string */
?>
<div class="sub-title">STATUS</div>
<p>
    <?php if ($isOk) { ?>
        <i class='green'> 
            This test passes with a current database version of <b>[<?php echo htmlentities($dbVersion); ?>]</b>
        </i>
    <?php } else { ?>
        <i class='red'>
            The current database version is <b>[<?php echo htmlentities($dbVersion); ?>]</b> which is below the required version of 5.0.0.
            Please work with your server admin or hosting provider to update the database server.
        </i>
    <?php } ?>
</p>

<div class="sub-title">DETAILS</div>
<p>
    The minimum supported database server is MySQL Server 5.0 or the <a href="https://mariadb.com/kb/en/mariadb/mariadb-vs-mysql-compatibility/" target="_blank">MariaDB equivalent</a>.
    Versions prior to MySQL 5.0 are over 10 years old and will not be compatible with Duplicator Pro.  If your host is using a legacy version, please ask them
    to upgrade the MySQL database engine to a more recent version.
</p>

<div class="sub-title">TROUBLESHOOT</div>
<ul>
    <li>Contact your host and have them upgrade your MySQL server.</li>
    <li><i class="far fa-file-code"></i> <a href='<?php echo DUPX_U::esc_attr(DUPX_Constants::FAQ_URL); ?>#faq-installer-100-q' target='_help'>I'm running into issues with the Database what can I do?</a></li>
</ul>

