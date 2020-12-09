<html>
    <head>
        <title>Formulaire HTML</title>
        <link rel="stylesheet" href="../menu.css">
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
    <?php
    include "../menu.php";
    ?>
        <div>
        <h1>Civilité:</h1>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="20" size="10">
        <label for="name">Prénom:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="20" size="10">
        <label for="date de naissance">Date de naissance:</label>
    </div>
        <select name="jour" id="">
            <option value="">01</option>
            <option value="">02</option>
            <option value="">03</option>
            <option value="">04</option>
            <option value="">05</option>
            <option value="">06</option>
            <option value="">07</option>
            <option value="">08</option>
            <option value="">09</option>
            <option value="">10</option>
            <option value="">11</option>
            <option value="">12</option>
            <option value="">13</option>
            <option value="">14</option>
            <option value="">15</option>
            <option value="">16</option>
            <option value="">17</option>
            <option value="">18</option>
            <option value="">19</option>
            <option value="">20</option>
            <option value="">21</option>
            <option value="">22</option>
            <option value="">23</option>
            <option value="">24</option>
            <option value="">25</option>
            <option value="">26</option>
            <option value="">27</option>
            <option value="">28</option>
            <option value="">29</option>
            <option value="">30</option>
            <option value="">31</option>
        </select>
        <select name="mois" id="">
            <option value="">Janvier</option>
            <option value="">Février</option>
            <option value="">Mars</option>
            <option value="">Avril</option>
            <option value="">Mai</option>
            <option value="">Juin</option>
            <option value="">Juillet</option>
            <option value="">Aout</option>
            <option value="">Septembre</option>
            <option value="">Octobre</option>
            <option value="">Novembre</option>
            <option value="">Décembre</option>
            </select>
            <div>
            <label for="année">Année:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <label for="année">Numéro:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <label for="année">Rue:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <h1>Adresse:</h1>
        <label for="année">Code postal:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <label for="année">Ville:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <label for="année">Telephone:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
        <label for="année">E-Mail:</label>
        <input type="text" id="name" name="name" required
         minlength="4" maxlength="12" size="10">
         <p>
        <input type="submit" value="Envoyer"></p>
        <p>
        <input type="submit" value="Remise a zéro"></p>
    </div>
    </body>       
</html>