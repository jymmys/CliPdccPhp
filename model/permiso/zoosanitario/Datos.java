/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso.zoosanitario;

import java.util.List;

/**
 * @author ytorregl
 *
 */
public class Datos {
	
	private String exportadorIdTributaria;
	private String exportadorNombre;
	private String exportadorDireccion;
	private String exportadorTelefono;
	private String exportadorEmail;
	private String exportadorTipoDocumento;
	private String importadorIdTributaria;
	private String importadorNombre;
	private String importadorDireccion;
	private String importadorTelefono;
	private String importadorEmail;
	private String importadorTipoDocumento;
	private String establecimientoProductor;
	private String establecimientoProcesador;
	private String paisOrigen;
	private String paisDestino;
	private String puntoSalida;
	private String puntoIngreso;
	private String fechaHoraSalida;
	private String modalidadTransporte;
	private String identificacionTransporte;
	private String marcharmoPrecintos;
	private String fechaExpedicion;
	private String fechaVencimiento;
	private String observaciones;
	private String nombreCargoFuncionario;
	private List<Detalle> detalles;
	private String estado;
	/**
	 * 
	 */
	public Datos() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param exportadorIdTributaria
	 * @param exportadorNombre
	 * @param exportadorDireccion
	 * @param exportadorTelefono
	 * @param exportadorEmail
	 * @param exportadorTipoDocumento
	 * @param importadorIdTributaria
	 * @param importadorNombre
	 * @param importadorDireccion
	 * @param importadorTelefono
	 * @param importadorEmail
	 * @param importadorTipoDocumento
	 * @param establecimientoProductor
	 * @param establecimientoProcesador
	 * @param paisOrigen
	 * @param paisDestino
	 * @param puntoSalida
	 * @param puntoIngreso
	 * @param fechaHoraSalida
	 * @param modalidadTransporte
	 * @param identificacionTransporte
	 * @param marcharmoPrecintos
	 * @param fechaExpedicion
	 * @param fechaVencimiento
	 * @param observaciones
	 * @param nombreCargoFuncionario
	 * @param detalles
	 * @param estado
	 */
	public Datos(String exportadorIdTributaria, String exportadorNombre, String exportadorDireccion,
			String exportadorTelefono, String exportadorEmail, String exportadorTipoDocumento,
			String importadorIdTributaria, String importadorNombre, String importadorDireccion,
			String importadorTelefono, String importadorEmail, String importadorTipoDocumento,
			String establecimientoProductor, String establecimientoProcesador, String paisOrigen, String paisDestino,
			String puntoSalida, String puntoIngreso, String fechaHoraSalida, String modalidadTransporte,
			String identificacionTransporte, String marcharmoPrecintos, String fechaExpedicion, String fechaVencimiento,
			String observaciones, String nombreCargoFuncionario, List<Detalle> detalles, String estado) {
		super();
		this.exportadorIdTributaria = exportadorIdTributaria;
		this.exportadorNombre = exportadorNombre;
		this.exportadorDireccion = exportadorDireccion;
		this.exportadorTelefono = exportadorTelefono;
		this.exportadorEmail = exportadorEmail;
		this.exportadorTipoDocumento = exportadorTipoDocumento;
		this.importadorIdTributaria = importadorIdTributaria;
		this.importadorNombre = importadorNombre;
		this.importadorDireccion = importadorDireccion;
		this.importadorTelefono = importadorTelefono;
		this.importadorEmail = importadorEmail;
		this.importadorTipoDocumento = importadorTipoDocumento;
		this.establecimientoProductor = establecimientoProductor;
		this.establecimientoProcesador = establecimientoProcesador;
		this.paisOrigen = paisOrigen;
		this.paisDestino = paisDestino;
		this.puntoSalida = puntoSalida;
		this.puntoIngreso = puntoIngreso;
		this.fechaHoraSalida = fechaHoraSalida;
		this.modalidadTransporte = modalidadTransporte;
		this.identificacionTransporte = identificacionTransporte;
		this.marcharmoPrecintos = marcharmoPrecintos;
		this.fechaExpedicion = fechaExpedicion;
		this.fechaVencimiento = fechaVencimiento;
		this.observaciones = observaciones;
		this.nombreCargoFuncionario = nombreCargoFuncionario;
		this.detalles = detalles;
		this.estado = estado;
	}
	/**
	 * @return the exportadorIdTributaria
	 */
	public String getExportadorIdTributaria() {
		return exportadorIdTributaria;
	}
	/**
	 * @param exportadorIdTributaria the exportadorIdTributaria to set
	 */
	public void setExportadorIdTributaria(String exportadorIdTributaria) {
		this.exportadorIdTributaria = exportadorIdTributaria;
	}
	/**
	 * @return the exportadorNombre
	 */
	public String getExportadorNombre() {
		return exportadorNombre;
	}
	/**
	 * @param exportadorNombre the exportadorNombre to set
	 */
	public void setExportadorNombre(String exportadorNombre) {
		this.exportadorNombre = exportadorNombre;
	}
	/**
	 * @return the exportadorDireccion
	 */
	public String getExportadorDireccion() {
		return exportadorDireccion;
	}
	/**
	 * @param exportadorDireccion the exportadorDireccion to set
	 */
	public void setExportadorDireccion(String exportadorDireccion) {
		this.exportadorDireccion = exportadorDireccion;
	}
	/**
	 * @return the exportadorTelefono
	 */
	public String getExportadorTelefono() {
		return exportadorTelefono;
	}
	/**
	 * @param exportadorTelefono the exportadorTelefono to set
	 */
	public void setExportadorTelefono(String exportadorTelefono) {
		this.exportadorTelefono = exportadorTelefono;
	}
	/**
	 * @return the exportadorEmail
	 */
	public String getExportadorEmail() {
		return exportadorEmail;
	}
	/**
	 * @param exportadorEmail the exportadorEmail to set
	 */
	public void setExportadorEmail(String exportadorEmail) {
		this.exportadorEmail = exportadorEmail;
	}
	/**
	 * @return the exportadorTipoDocumento
	 */
	public String getExportadorTipoDocumento() {
		return exportadorTipoDocumento;
	}
	/**
	 * @param exportadorTipoDocumento the exportadorTipoDocumento to set
	 */
	public void setExportadorTipoDocumento(String exportadorTipoDocumento) {
		this.exportadorTipoDocumento = exportadorTipoDocumento;
	}
	/**
	 * @return the importadorIdTributaria
	 */
	public String getImportadorIdTributaria() {
		return importadorIdTributaria;
	}
	/**
	 * @param importadorIdTributaria the importadorIdTributaria to set
	 */
	public void setImportadorIdTributaria(String importadorIdTributaria) {
		this.importadorIdTributaria = importadorIdTributaria;
	}
	/**
	 * @return the importadorNombre
	 */
	public String getImportadorNombre() {
		return importadorNombre;
	}
	/**
	 * @param importadorNombre the importadorNombre to set
	 */
	public void setImportadorNombre(String importadorNombre) {
		this.importadorNombre = importadorNombre;
	}
	/**
	 * @return the importadorDireccion
	 */
	public String getImportadorDireccion() {
		return importadorDireccion;
	}
	/**
	 * @param importadorDireccion the importadorDireccion to set
	 */
	public void setImportadorDireccion(String importadorDireccion) {
		this.importadorDireccion = importadorDireccion;
	}
	/**
	 * @return the importadorTelefono
	 */
	public String getImportadorTelefono() {
		return importadorTelefono;
	}
	/**
	 * @param importadorTelefono the importadorTelefono to set
	 */
	public void setImportadorTelefono(String importadorTelefono) {
		this.importadorTelefono = importadorTelefono;
	}
	/**
	 * @return the importadorEmail
	 */
	public String getImportadorEmail() {
		return importadorEmail;
	}
	/**
	 * @param importadorEmail the importadorEmail to set
	 */
	public void setImportadorEmail(String importadorEmail) {
		this.importadorEmail = importadorEmail;
	}
	/**
	 * @return the importadorTipoDocumento
	 */
	public String getImportadorTipoDocumento() {
		return importadorTipoDocumento;
	}
	/**
	 * @param importadorTipoDocumento the importadorTipoDocumento to set
	 */
	public void setImportadorTipoDocumento(String importadorTipoDocumento) {
		this.importadorTipoDocumento = importadorTipoDocumento;
	}
	/**
	 * @return the establecimientoProductor
	 */
	public String getEstablecimientoProductor() {
		return establecimientoProductor;
	}
	/**
	 * @param establecimientoProductor the establecimientoProductor to set
	 */
	public void setEstablecimientoProductor(String establecimientoProductor) {
		this.establecimientoProductor = establecimientoProductor;
	}
	/**
	 * @return the establecimientoProcesador
	 */
	public String getEstablecimientoProcesador() {
		return establecimientoProcesador;
	}
	/**
	 * @param establecimientoProcesador the establecimientoProcesador to set
	 */
	public void setEstablecimientoProcesador(String establecimientoProcesador) {
		this.establecimientoProcesador = establecimientoProcesador;
	}
	/**
	 * @return the paisOrigen
	 */
	public String getPaisOrigen() {
		return paisOrigen;
	}
	/**
	 * @param paisOrigen the paisOrigen to set
	 */
	public void setPaisOrigen(String paisOrigen) {
		this.paisOrigen = paisOrigen;
	}
	/**
	 * @return the paisDestino
	 */
	public String getPaisDestino() {
		return paisDestino;
	}
	/**
	 * @param paisDestino the paisDestino to set
	 */
	public void setPaisDestino(String paisDestino) {
		this.paisDestino = paisDestino;
	}
	/**
	 * @return the puntoSalida
	 */
	public String getPuntoSalida() {
		return puntoSalida;
	}
	/**
	 * @param puntoSalida the puntoSalida to set
	 */
	public void setPuntoSalida(String puntoSalida) {
		this.puntoSalida = puntoSalida;
	}
	/**
	 * @return the puntoIngreso
	 */
	public String getPuntoIngreso() {
		return puntoIngreso;
	}
	/**
	 * @param puntoIngreso the puntoIngreso to set
	 */
	public void setPuntoIngreso(String puntoIngreso) {
		this.puntoIngreso = puntoIngreso;
	}
	/**
	 * @return the fechaHoraSalida
	 */
	public String getFechaHoraSalida() {
		return fechaHoraSalida;
	}
	/**
	 * @param fechaHoraSalida the fechaHoraSalida to set
	 */
	public void setFechaHoraSalida(String fechaHoraSalida) {
		this.fechaHoraSalida = fechaHoraSalida;
	}
	/**
	 * @return the modalidadTransporte
	 */
	public String getModalidadTransporte() {
		return modalidadTransporte;
	}
	/**
	 * @param modalidadTransporte the modalidadTransporte to set
	 */
	public void setModalidadTransporte(String modalidadTransporte) {
		this.modalidadTransporte = modalidadTransporte;
	}
	/**
	 * @return the identificacionTransporte
	 */
	public String getIdentificacionTransporte() {
		return identificacionTransporte;
	}
	/**
	 * @param identificacionTransporte the identificacionTransporte to set
	 */
	public void setIdentificacionTransporte(String identificacionTransporte) {
		this.identificacionTransporte = identificacionTransporte;
	}
	/**
	 * @return the marcharmoPrecintos
	 */
	public String getMarcharmoPrecintos() {
		return marcharmoPrecintos;
	}
	/**
	 * @param marcharmoPrecintos the marcharmoPrecintos to set
	 */
	public void setMarcharmoPrecintos(String marcharmoPrecintos) {
		this.marcharmoPrecintos = marcharmoPrecintos;
	}
	/**
	 * @return the fechaExpedicion
	 */
	public String getFechaExpedicion() {
		return fechaExpedicion;
	}
	/**
	 * @param fechaExpedicion the fechaExpedicion to set
	 */
	public void setFechaExpedicion(String fechaExpedicion) {
		this.fechaExpedicion = fechaExpedicion;
	}
	/**
	 * @return the fechaVencimiento
	 */
	public String getFechaVencimiento() {
		return fechaVencimiento;
	}
	/**
	 * @param fechaVencimiento the fechaVencimiento to set
	 */
	public void setFechaVencimiento(String fechaVencimiento) {
		this.fechaVencimiento = fechaVencimiento;
	}
	/**
	 * @return the observaciones
	 */
	public String getObservaciones() {
		return observaciones;
	}
	/**
	 * @param observaciones the observaciones to set
	 */
	public void setObservaciones(String observaciones) {
		this.observaciones = observaciones;
	}
	/**
	 * @return the nombreCargoFuncionario
	 */
	public String getNombreCargoFuncionario() {
		return nombreCargoFuncionario;
	}
	/**
	 * @param nombreCargoFuncionario the nombreCargoFuncionario to set
	 */
	public void setNombreCargoFuncionario(String nombreCargoFuncionario) {
		this.nombreCargoFuncionario = nombreCargoFuncionario;
	}
	/**
	 * @return the detalles
	 */
	public List<Detalle> getDetalles() {
		return detalles;
	}
	/**
	 * @param detalles the detalles to set
	 */
	public void setDetalles(List<Detalle> detalles) {
		this.detalles = detalles;
	}
	/**
	 * @return the estado
	 */
	public String getEstado() {
		return estado;
	}
	/**
	 * @param estado the estado to set
	 */
	public void setEstado(String estado) {
		this.estado = estado;
	}
	
	



}