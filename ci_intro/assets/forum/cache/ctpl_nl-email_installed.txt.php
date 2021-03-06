<?php if (!defined('IN_PHPBB')) exit; ?>Subject: phpBB installatie geslaagd

Gefeliciteerd,

Je hebt phpBB succesvol op je server geïnstalleerd.

Deze e-mail bevat belangrijke informatie over je registratie en het is aan te raden om deze te bewaren. Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je je wachtwoord bent vergeten, kun je deze laten resetten aan de hand van je opgegeven e-mailadres en gebruikersnaam.

----------------------------
Gebruikersnaam: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>


Forumadres: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Belangrijke informatie over je phpBB-installatie vind je in de "docs" map van de installatie en op de website - http://www.phpbb.nl/documentatie

Om je forum veilig te houden, raden wij je aan om de meest recente versies van de forumsoftware bij te houden. Voor jouw gemak is er een nieuwsbrief beschikbaar, die je kunt vinden op bovengenoemde pagina.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>