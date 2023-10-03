import express, {Request, Response} from 'express';

const port = 3000
const app = express()

app.listen(port)

app.get("/", (req: Request, res: Response) => {
    res.status(200).json({nome: "Erico Augusto", turma:"3D1", prova:"A"})
})

app.get("/calculos", (req: Request, res: Response) => {
    let raioTransmissao = Number(req.query.raioTransmissao)
    let result = Math.PI * ( raioTransmissao * raioTransmissao)

    res.status(200).json({resultado: result})
})
