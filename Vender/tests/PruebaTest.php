<?php

require_once 'conect.php';

class PruebaTest extends \PHPUnit_Framework_TestCase {

	/** @test **/
	public function conect() {
		$conex=new conexion;
		$conn=$conex->conect();
		$this->assertEquals(2, $conn);

	}

	/** @test **/
	public function consulta() {
		$sql = "Select marca from productos where Nombre='Pan'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertEquals('comapan', $fila[0]);

	}


	/** @test **/
	public function insercion() {
		$conex=new conexion;
		$conn=$conex->Addprod('Arepa','Doña lola','2022-01-29',3800,2);
		$this->assertEquals('Good', $conn);

	}

	/** @test **/
	public function actualizacion() {
		$conex=new conexion;
		$conn=$conex->Updateprod('Arepa','Doña Petra','2023-01-29',3800,2);
		$this->assertEquals('Good', $conn);

	}

	/** @test **/
	public function Eliminar() {
		$conex=new conexion;
		$conn=$conex->Deleteprod(14);
		$this->assertEquals('Good', $conn);
	}

	/** @test **/
	public function total_cntdd() {
		$sql = "Select costo*cantidad from productos where Nombre='Pan'";
    $conexion = mysqli_connect("localhost","root","","prueba");
    $result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertEquals(9000, $fila[0]);
	}

	/** @test **/
	public function ventas_dia() {
		$sql = "Select Sum(costo*cantidad) from productos where dia='2020-05-12'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertEquals(43500, $fila[0]);
	}

	/** @test **/
	public function Cantidad_not_null() {
		$sql = "Select costo*cantidad from productos where Nombre='Pan'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$this->assertNotNull(0);
	}

	/** @test **/
	public function Cantidad_null() {
		$sql = "Select costo*cantidad from productos where Nombre='test'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertNull($fila);
	}

	/** @test **/
	public function Eliminar_Same() {
			$conex=new conexion;
			$conn=$conex->Deleteprod(14);
			$this->assertSame('Good',$conn);
	}

	/** @test **/
	public function Conexion_Nan() {
			$conex=new conexion;
			$conn=$conex->conect();
			$this->assertNan(2, $conn);
	}

	/** @test **/
	public function Insercion_Emp() {
			$conex=new conexion;
			$conn=$conex->Addprod('Chocolatina','Hershey','2024-01-29',4000,4);
			$this->assertEmpty(2);
	}

	/** @test **/
	public function Insercion_NEmp() {
			$conex=new conexion;
			$conn=$conex->Addprod('Chocolatina','Hershey','2024-01-29',4000,4);
			$this->assertNotEmpty(2);
	}

	/** @test **/
	public function Ventasdia_less() {
		$sql = "Select Sum(costo*cantidad) from productos where dia='2020-05-12'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertLessThan(44000,$fila[0]);
	}

	/** @test **/
	public function Ventasdia_lessthan() {
		$sql = "Select Sum(costo*cantidad) from productos where dia='2020-05-12'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertLessThanOrEqual(43500,$fila[0]);
	}

	/** @test **/
	public function Exist_Index(){
			$this->assertFileExists('C:xampp/htdocs/Vender/index.php');
	}

	/** @test **/
	public function Costo_IsInt(){
		$sql = "Select costo from productos where marca='Jet'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertIsInt($fila[0]);
	}

	/** @test **/
	public function Nombre_IsString(){
		$sql = "Select Nombre from productos where marca='Jet'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertIsString($fila[0]);
	}

	/** @test **/
	public function Costo_Greater(){
		$sql = "Select costo from productos where marca='Jet'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertGreaterThan(1000,$fila[0]);
	}

	/** @test **/
	public function Costo_GreaterOrEqual(){
		$sql = "Select costo from productos where marca='Jet'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertGreaterThanOrEqual(1450,$fila[0]);
	}

	/** @test **/
	public function Ventasdia_count(){
		$sql = "Select Sum(costo*cantidad) from productos where dia='2020-05-12'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertCount(1,$fila);
	}

	/** @test **/
	public function Ventas_count(){
		$sql = "Select * from productos where dia='2020-05-12'";
		$conexion = mysqli_connect("localhost","root","","prueba");
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_row($result);
		$this->assertCount(7,$fila);
	}

	/**
	* @group bend
	* @test
	*/
	public function Prueba_Null(){
		$this->assertEmpty(Null);
	}

	/**
	* @group bend
	* @runInSeparateProcess
	* @test
	*/
	public function PruebaEMpty(){
		$this->assertEmpty(0);
	}

	/**
	 * @group bend
	 * @param string    $input
	 * @param int       $expectedLength
	 *
	 * @testWith        ["test", 4]
	 *                  ["longer-string", 13]
	 *									["Hola", 4]
	 */
	public function testStringLength(string $input, int $expectedLength){
	    $this->assertSame($expectedLength, strlen($input));
	}

	/**
		 * @group bend
     * @dataProvider additionProvider
     */
    public function testInsercion_2($a, $b, $c, $d, $e, $expected){
			$conex=new conexion;
			$conn=$conex->Addprod($a,$b,$c,$d,$e);
      $this->assertEquals($expected, $conn);
    }

    public function additionProvider()
    {
        return [
            ['Paquete', 'Cheetos', '2022-09-12', 2500, 4, 'Good'],
            ['Chicle', 'Tumix', '2022-09-12', 1300, 2, 'Good'],
            ['Cigarrillos', 'Mustang', '2024-09-12', 3500, 1, 'Good'],
            ['Gaseosa', 'Sprite', '2022-10-10', 2000, 1, 'Good']
        ];
    }

}
?>
