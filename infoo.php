<?php
$url ="https://api-blue-archive.vercel.app/api/characters";
$response = file_get_contents($url);
if ($response === false){
    die("error");
}

$data = json_decode($response, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .character-img {
            width: 80px;
            height: auto;
        }
        .school-icon {
            width: 30px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Character List</h2>
    <table>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>School</th>
                <th>Birthday</th>
                <th>School Icon</th>
                <th>Damage Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['data'] as $character): ?>
                <tr>
                    <td>
                        <?php if (!empty($character['photoUrl'])): ?>
                            <img src="<?= $character['photoUrl'] ?>" alt="<?= $character['name'] ?>" class="character-img">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($character['name']) ?></td>
                    <td><?= htmlspecialchars($character['school']) ?></td>
                    <td><?= htmlspecialchars($character['birthday']) ?></td>
                    <td>
                        <?php if (!empty($character['imageSchool'])): ?>
                            <img src="<?= $character['imageSchool'] ?>" alt="School Icon" class="school-icon">
                        <?php else: ?>
                            <span>No Icon</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($character['damageType']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
