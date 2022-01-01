<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>{{ $msg }}</h1>
     -->
    <!-- <ul>
        @foreach ($temperatures as $temperature)
        <li>{{ $temperature->年月日 }}</li>
        <li>{{ $temperature->平均気温1 }}</li>
        @endforeach
    </ul> -->
    <!-- <table>

        @foreach ($temperatures as $temperature)
        <tr>
            <td>{{ $temperature->年月日 }}</td>
            <td>{{ $temperature->平均気温1 }}</td>
            </tr>
            @endforeach
    </table> -->
    <table border="1">
    <tr>
      <th>名前</th>
      <th>年齢</th>
    </tr>
    <tr>
      <td>田中</td>
      <td>27</td>
    </tr>
    <tr>
      <td>佐藤</td>
      <td>42</td>
    </tr>

    @foreach ($temperatures as $temperature)
        <tr>
            <td>{{ $temperature->年月日 }}</td>
            <td>{{ $temperature->平均気温1 }}</td>
        </tr>
    @endforeach


  </table>



</body>
</html>