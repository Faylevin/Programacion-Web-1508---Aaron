package mx.unam.aragon.ico.te.Animalesmvc.Servicio;

import mx.unam.aragon.ico.te.Animalesmvc.Modelos.Animales;
import mx.unam.aragon.ico.te.Animalesmvc.Repositorio.MascotaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class MascotaService {
    @Autowired
    private MascotaRepository mascotaRepository;

    public boolean guardarAnimal(Animales animales) {
        Animales result = mascotaRepository.save(animales);
        return result != null;
    }

    public Animales getAnimales(Integer id) {
        return mascotaRepository.getById(id);
    }
}