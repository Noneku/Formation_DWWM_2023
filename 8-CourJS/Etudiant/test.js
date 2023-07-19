let matieres = [{
    français : 12,
    anglais : 13,
    espagnole : 16
}];

let bestMatiere = matieres.find((m) => Math.max(m.matiere));

console.log(bestMatiere);