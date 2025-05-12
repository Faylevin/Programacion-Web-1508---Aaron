package mx.unam.aragon.ico.te.musicamvc.controladores;


import mx.unam.aragon.ico.te.musicamvc.modelos.Artista;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/tienda/")
public class MusicaController {

    @GetMapping("/home/")
    public String home() {
        return "home";
    }
    @GetMapping("/artista/")
    public String artista(Model model) {
        Artista artista = new Artista(1, "Chester Bennington", "Rock", 41, "Chester Charles Bennington fue un cantante, compositor y músico estadounidense, conocido por ser el vocalista principal y compositor de la banda Linkin Park. ", "https://i.imgur.com/Pd8HcrX.jpeg");
        model.addAttribute("artista", artista);
        return "artista";
    }

}
