package mx.unam.aragon.ico.te.Animalesmvc.Controladores;

import mx.unam.aragon.ico.te.Animalesmvc.Modelos.Animales;
import mx.unam.aragon.ico.te.Animalesmvc.Servicio.MascotaService;
import org.slf4j.ILoggerFactory;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

@Controller
@RequestMapping("/veterinaria")
public class AnimalsController {
    @Autowired
    private MascotaService mascotaService;

    @GetMapping("/home/")
    public String home() {
        return "home";
    }

    @GetMapping("/animal/")
    public String animal(org.springframework.ui.Model model) {
        Animales animal = new Animales(1,"Jeff","Perro","chihuahua",8,5,"https://i.imgur.com/89LCnno.jpeg");
        model.addAttribute("animal",animal);
        return "animal";
    }

    @GetMapping("/nuevo")
    public String nuevo(Model model) {
        model.addAttribute("animal", new Animales(1,"aa","aa","aaa",4,4,"aa"));
        return "formulario";
    }

    @PostMapping("/guardar")
    public String guardar(
            @ModelAttribute Animales animal
    ) {
        LoggerFactory.getLogger(getClass()).info("Guardando animal + " + animal);
        mascotaService.guardarAnimal(animal);
        return "redirect:/veterinaria/nuevo?exito";
    }

    @GetMapping("/animal/{id}")
    public String animal(@PathVariable Integer id, Model model) {
        model.addAttribute("animal",mascotaService.getAnimales(id));
        return "animal";
    }
}

