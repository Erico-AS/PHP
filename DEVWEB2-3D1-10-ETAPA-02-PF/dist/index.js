"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const express_1 = __importDefault(require("express"));
const port = 3000;
const app = (0, express_1.default)();
app.listen(port);
app.get("/", (req, res) => {
    res.status(200).json({ nome: "Erico Augusto", turma: "3D1", prova: "A" });
});
app.get("/calculos", (req, res) => {
    let raioTransmissao = Number(req.query.raioTransmissao);
    let result = Math.PI * (raioTransmissao * raioTransmissao);
    res.status(200).json({ resultado: result });
});
