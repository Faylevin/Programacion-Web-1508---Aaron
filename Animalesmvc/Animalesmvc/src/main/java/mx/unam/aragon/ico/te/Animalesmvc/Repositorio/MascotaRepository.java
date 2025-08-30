package mx.unam.aragon.ico.te.Animalesmvc.Repositorio;

import mx.unam.aragon.ico.te.Animalesmvc.Modelos.Animales;
import org.springframework.data.jpa.repository.JpaRepository;

public interface MascotaRepository extends JpaRepository<Animales, Integer> {
}
