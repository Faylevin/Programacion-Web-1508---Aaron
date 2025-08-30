package mx.unam.aragon.ico.te.Animalesmvc.Modelos;
import jakarta.persistence.*;

import java.util.Objects;


@Entity
@Table(name = "Mascotas")
public class Animales {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(name = "mascota", nullable = false)
    private String nombre;
    private String especie;
    private String raza;
    private Integer edad;
    private Integer peso;
    private String Imagen;

    public Animales() {
    }

    public Animales(int id, String nombre, String especie, String raza, Integer edad, Integer peso, String imagen) {
        this.id = id;
        this.nombre = nombre;
        this.especie = especie;
        this.raza = raza;
        this.edad = edad;
        this.peso = peso;
        Imagen = imagen;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getEspecie() {
        return especie;
    }

    public void setEspecie(String especie) {
        this.especie = especie;
    }

    public String getRaza() {
        return raza;
    }

    public void setRaza(String raza) {
        this.raza = raza;
    }

    public Integer getEdad() {
        return edad;
    }

    public void setEdad(Integer edad) {
        this.edad = edad;
    }

    public Integer getPeso() {
        return peso;
    }

    public void setPeso(Integer peso) {
        this.peso = peso;
    }

    public String getImagen() {
        return Imagen;
    }

    public void setImagen(String imagen) {
        Imagen = imagen;
    }

    @Override
    public boolean equals(Object o) {
        if (o == null || getClass() != o.getClass()) return false;
        Animales animales = (Animales) o;
        return id == animales.id && Objects.equals(nombre, animales.nombre) && Objects.equals(especie, animales.especie) && Objects.equals(raza, animales.raza) && Objects.equals(edad, animales.edad) && Objects.equals(peso, animales.peso) && Objects.equals(Imagen, animales.Imagen);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, nombre, especie, raza, edad, peso, Imagen);
    }

    @Override
    public String toString() {
        return "Animales{" +
                "id=" + id +
                ", nombre='" + nombre + '\'' +
                ", especie='" + especie + '\'' +
                ", raza='" + raza + '\'' +
                ", edad=" + edad +
                ", peso=" + peso +
                ", Imagen='" + Imagen + '\'' +
                '}';
    }
}

