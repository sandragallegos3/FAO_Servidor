<?php
class login extends Conectar
{
    public function Val_Usuario($Usuario, $Contraseña)
    {
        $conectar = parent::conexion();
        $sql = "SELECT Usuario, Contraseña FROM TBL_MS_USUARIO WHERE Usuario = ? AND Contraseña = ?;";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $Usuario);
        $stmt->bindValue(2, $Contraseña);
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>