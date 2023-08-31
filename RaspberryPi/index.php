<?php
// 데이터베이스 연결 정보
$servername = "localhost";
$username = "pi";
$password = "pi";
$dbname = "iot_home";

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 데이터베이스 쿼리
$query = "SELECT * FROM iot_kitchen";
$result = $conn->query($query);

// 결과 출력
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>LIGHTING</th><th>BOILER</th><th>AC</th><th>GAS</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["LIGHTING"] . "</td>";
        echo "<td>" . $row["BOILER"] . "</td>";
        echo "<td>" . $row["AC"] . "</td>";
        echo "<td>" . $row["GAS"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "결과가 없습니다.";
}

// 연결 종료
$conn->close();
?>

