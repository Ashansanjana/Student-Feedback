<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d1bfed;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #137e91;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .content h3 {
            margin-top: 0;
        }
        .content label {
            display: block;
            margin: 10px 0 5px;
        }
        .content input[type="text"], .content input[type="email"], .content input[type="password"], .content select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .content .submit-btn {
            background-color: #137e91;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            display: inline-block;
        }
        .content .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="header">
    <h2 style="margin: 0;">University Of Jaffna</h2>
</div>

<div class="content">
    <h3>Add New Notice Form</h3>
    <form action="test_add-NoticeQuery.php" method="post">

        <label for="Nid">Notice Number:</label>
        <input type="text" id="Nid" name="Nid" placeholder="Enter the notice number  :eg:NXXX"  required>

        <label for="Ncon">Notice Content:</label>
        <input type="text" id="Ncon" name="Ncon" placeholder="Enter the notice"  required>

        </select>

        <button type="submit" class="submit-btn" name="addnew">Add Notice</button>
    </form>
</div>

</body>
</html>
